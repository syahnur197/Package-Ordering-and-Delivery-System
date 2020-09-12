<?php

namespace App\Form;

use App\Entity\Order;
use IntlDateFormatter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $input_class = 'bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4 w-full';
        $builder
            ->add('address', TextareaType::class, [
                'label' => 'Address',
                'attr'  => [
                    'class' => $input_class,
                    'placeholder' => 'No 1, Kampong Kiulap, Bandar Seri Begawan',
                ]
            ])
            ->add('deliver_on', DateTimeType::class, [
                'label' => 'Deliver On',
                'data' => new \DateTime(),
                'attr'  => [
                    'class' => $input_class,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
