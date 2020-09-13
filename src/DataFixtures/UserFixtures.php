<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setName('Syahnur Nizam');
        $admin->setUsername('syahnur');
        $admin->setEmail('syahnur@email.com');
        $admin->setPassword($this->encoder->encodePassword($admin, 'password'));
        $admin->setRoleAsAdmin();
        $manager->persist($admin);

        $drivers = [
            [
                'name' => 'Driver One',
                'username' => 'driver_one',
                'email' => 'one@driver.com',
            ],
            [
                'name' => 'Driver Two',
                'username' => 'driver_two',
                'email' => 'two@driver.com',
            ],
            [
                'name' => 'Driver Three',
                'username' => 'driver_three',
                'email' => 'three@driver.com',
            ],
        ];

        foreach ($drivers as $driver) {
            $driverObject = new User();
            $driverObject->setUsername($driver['username']);
            $driverObject->setName($driver['name']);
            $driverObject->setEmail($driver['email']);
            $driverObject->setPassword($this->encoder->encodePassword($driverObject, 'password'));
            $driverObject->setRoleAsDriver();
            $manager->persist($driverObject);
        }

        $manager->flush();
    }
}
