<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $a1 = new Animal();
        $a1->setName('dog')
           ->setDescription('nice dog')
           ->setImage('dog.png')
           ->setWeight(25)
           ->setDangerous(false);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('pig')
           ->setDescription('pink pig')
           ->setImage('pig.png')
           ->setWeight(80)
           ->setDangerous(false);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('snake')
           ->setDescription('dangerous snake')
           ->setImage('snake.png')
           ->setWeight(10)
           ->setDangerous(true);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setName('crocodile')
           ->setDescription('dangerous crocodile')
           ->setImage('croco.png')
           ->setWeight(180)
           ->setDangerous(true);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setName('shark')
           ->setDescription('dangerous shark')
           ->setImage('shark.png')
           ->setWeight(350)
           ->setDangerous(true);
        $manager->persist($a5);

        $manager->flush();
    }
}
