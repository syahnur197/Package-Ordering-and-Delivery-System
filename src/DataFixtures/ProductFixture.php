<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $productA = new Product();

        $productA->setName('Package A');
        $productA->setPrice('10.00');
        $productA->setDescription('This is Package A');
        $manager->persist($productA);

        $productB = new Product();
        $productB->setName('Package B');
        $productB->setPrice('15.00');
        $productB->setDescription('This is Package B');
        $manager->persist($productB);

        $productC = new Product();
        $productC->setName('Package C');
        $productC->setPrice('20.00');
        $productC->setDescription('This is Package C');
        $manager->persist($productC);

        $manager->flush();
    }
}
