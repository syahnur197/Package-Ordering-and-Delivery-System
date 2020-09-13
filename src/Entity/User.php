<?php

namespace App\Entity;

use Exception;
use App\Entity\Traits\UserRole;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    use TimestampableEntity, UserRole;

    const ROLE_ADMIN    = 'ROLE_ADMIN';
    const ROLE_DRIVER   = 'ROLE_DRIVER';
    const ROLE_CUSTOMER = 'ROLE_CUSTOMER';

    const ROLES = [
        self::ROLE_ADMIN    => 'Admin',
        self::ROLE_DRIVER   => 'Driver',
        self::ROLE_CUSTOMER => 'Customer',
    ];


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    
    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;
    
    private $plainPassword;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="user", orphanRemoval=true)
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="deliverer")
     */
    private $deliveredOrders;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
        $this->deliveredOrders = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->username;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }


    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setUser($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->contains($order)) {
            $this->orders->removeElement($order);
            // set the owning side to null (unless already changed)
            if ($order->getUser() === $this) {
                $order->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getDeliveredOrders(): Collection
    {
        return $this->deliveredOrders;
    }

    public function addDeliveredOrder(Order $deliveredOrder): self
    {
        if (!$this->deliveredOrders->contains($deliveredOrder)) {
            $this->deliveredOrders[] = $deliveredOrder;
            $deliveredOrder->setDeliverer($this);
        }

        return $this;
    }

    public function removeDeliveredOrder(Order $deliveredOrder): self
    {
        if ($this->deliveredOrders->contains($deliveredOrder)) {
            $this->deliveredOrders->removeElement($deliveredOrder);
            // set the owning side to null (unless already changed)
            if ($deliveredOrder->getDeliverer() === $this) {
                $deliveredOrder->setDeliverer(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    
}
