<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Order;
use App\Entity\Product;
use App\Form\Order\ProcessOrderType;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/order")
 */
class OrderController extends AbstractController
{
    /**
     * @Route("/", name="order_index", methods={"GET"})
     */
    public function index(OrderRepository $orderRepository): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        $orders = null;

        if ($user->isAdmin()) {
            $orders = $orderRepository->findAll();
        } else if ($user->isDriver()) {
            $orders = $orderRepository->findBy([
                'deliverer' => $user,
            ]);
        } else if ($user->isCustomer()) {
            $orders = $orderRepository->findBy([
                'user' => $user,
            ]);
        }

        $header_class = 'px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider';

        return $this->render('order/index.html.twig', [
            'orders' => $orders,
            'header_class' => $header_class,
        ]);
    }

    /**
     * @Route("/new/{product}", name="order_new", methods={"GET","POST"})
     */
    public function new(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();

            $order->setProduct($product);
            $order->setUser($user);

            $order->setAmountPaid($product->getPrice());

            $entityManager->persist($order);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('order/new.html.twig', [
            'order' => $order,
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="order_show", methods={"GET"})
     */
    public function show(Order $order): Response
    {
        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="order_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Order $order, UserRepository $userRepository): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        if (!$user->isAdmin()) {
            $this->addFlash('error', 'You are not allowed to process this order!');

            return $this->redirectToRoute('order_index');
        }

        if (!$order->isPending()) {
            $this->addFlash('error', 'This order is not pending!');

            return $this->redirectToRoute('order_index');
        }

        $deliverers = $userRepository->findByRole(User::ROLE_DRIVER);

        return $this->render('order/edit.html.twig', [
            'status_accepted' => Order::STATUS_ACCEPTED,
            'status_rejected' => Order::STATUS_REJECTED,
            'deliverers' => $deliverers,
            'order' => $order,
            'product' => $order->getProduct(),
        ]);
    }

    /**
     * @Route("/{id}", name="order_update", methods={"PATCH"})
     */
    public function update(Request $request, Order $order, UserRepository $userRepository, EntityManagerInterface $manager): Response
    {

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('order_update' . $order->getId(), $token)) {
            $this->addFlash('error', 'Invalid CSRF token!');

            return $this->redirectToRoute('order_index');
        }

        $status = $request->get('status');
        $deliverer_id = $request->get('deliverer_id');


        $order->setStatus($status);

        if ($status == Order::STATUS_ACCEPTED) {
            $deliverer = $userRepository->find($deliverer_id);

            $order->setDeliverer($deliverer);
        }

        $manager->persist($order);
        $manager->flush();

        return $this->redirectToRoute('order_index');
    }

    /**
     * @Route("/{id}/delivered", name="order_delivered", methods={"PATCH"})
     */
    public function delivered(Request $request, Order $order, EntityManagerInterface $manager): Response
    {
        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('delivered' . $order->getId(), $token)) {
            $this->addFlash('error', 'Invalid CSRF token!');

            return $this->redirectToRoute('order_index');
        }

        $order->setDeliverAt(new \DateTime());
        $order->setStatus(Order::STATUS_DELIVERED);

        $manager->persist($order);
        $manager->flush();

        return $this->redirectToRoute('order_index');
    }


    /**
     * @Route("/{id}", name="order_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Order $order): Response
    {
        if ($this->isCsrfTokenValid('delete' . $order->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('order_index');
    }
}
