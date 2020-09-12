<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="orders")
 */
class Order
{

    use TimestampableEntity;

    const STATUS_PENDING   = 1;
    const STATUS_ACCEPTED  = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_REJECTED  = 4;

    const STATUSES = [
        self::STATUS_PENDING   => 'Pending',
        self::STATUS_ACCEPTED  => 'Accepted',
        self::STATUS_DELIVERED => 'Delivered',
        self::STATUS_REJECTED  => 'Rejected',
    ];

    const STATUS_COLOURS = [
        self::STATUS_PENDING   => 'orange',
        self::STATUS_ACCEPTED  => 'blue',
        self::STATUS_DELIVERED => 'green',
        self::STATUS_REJECTED  => 'red',
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $amount_paid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deliver_on;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deliver_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $status = self::STATUS_PENDING;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="deliveredOrders")
     */
    private $deliverer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getDeliverOn(): ?\DateTimeInterface
    {
        return $this->deliver_on;
    }

    public function setDeliverOn(\DateTimeInterface $deliver_on): self
    {
        $this->deliver_on = $deliver_on;

        return $this;
    }

    public function getStatus(): ?string
    {
        return self::STATUSES[$this->status];
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatusColour(): ?string
    {
        return self::STATUS_COLOURS[$this->status];
    }

    public function getDeliverAt(): ?\DateTimeInterface
    {
        return $this->deliver_at;
    }

    public function setDeliverAt(\DateTimeInterface $deliver_at): self
    {
        $this->deliver_at = $deliver_at;

        return $this;
    }

    public function getAmountPaid(): ?string
    {
        return $this->amount_paid;
    }

    public function setAmountPaid(string $amount_paid): self
    {
        $this->amount_paid = $amount_paid;

        return $this;
    }

    public function getDeliverer(): ?User
    {
        return $this->deliverer;
    }

    public function setDeliverer(?User $deliverer): self
    {
        $this->deliverer = $deliverer;

        return $this;
    }
}
