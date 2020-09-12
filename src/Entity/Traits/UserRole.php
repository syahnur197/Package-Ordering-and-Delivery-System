<?php

namespace App\Entity\Traits;

use Exception;
use App\Entity\User;

trait UserRole
{
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function setRoleAsDriver() : self
    {
        $this->roles[] = User::ROLE_DRIVER;
        return $this;
    }

    public function setRoleAsAdmin() : self
    {
        $this->roles[] = User::ROLE_ADMIN;
        return $this;
    }

    public function setRoleAsCustomer() : self
    {
        $this->roles[] = User::ROLE_CUSTOMER;
        return $this;
    }

    public function isDriver()
    {
        return $this->hasRole(User::ROLE_DRIVER);
    }

    public function isCustomer()
    {
        return $this->hasRole(User::ROLE_CUSTOMER);
    }

    public function isAdmin()
    {
        return $this->hasRole(User::ROLE_ADMIN);
    }


    private function hasRole(string $role) : bool
    {
        return in_array($role, $this->roles);
    }

    private function roleExists(string $role) : bool
    {
        return in_array($role, User::ROLES);
    }
}