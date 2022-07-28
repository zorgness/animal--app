<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Family;
use App\Entity\Continent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $c1 = new Continent();
        $c1->setLabel('europe');
          $manager->persist($c1);

        $c2 = new Continent();
        $c2->setLabel('africa');
          $manager->persist($c2);

        $c3 = new Continent();
        $c3->setLabel('asia');
          $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLabel('australia');
          $manager->persist($c4);

        $c5 = new Continent();
        $c5->setLabel('antartica');
          $manager->persist($c5);

        $f1 = new Family();
        $f1->setLabel('reptile')
          ->setDescription('a vertebrate animal of a class that includes snakes, lizards, crocodiles, turtles, and tortoises. They are distinguished by having a dry scaly skin and typically laying soft-shelled eggs on land');
          $manager->persist($f1);

        $f2 = new Family();
        $f2->setLabel('mammal')
            ->setDescription('a warm-blooded vertebrate animal of a class that is distinguished by the possession of hair or fur, females that secrete milk for the nourishment of the young, and (typically) the birth of live young.');
          $manager->persist($f2);

        $f3 = new Family();
        $f3->setLabel('fish')
              ->setDescription('a limbless cold-blooded vertebrate animal with gills and fins living wholly in water.');
          $manager->persist($f3);

        $a1 = new Animal();
        $a1->setName('dog')
           ->setDescription('nice dog')
           ->setImage('dog.png')
           ->setWeight(25)
           ->setDangerous(false)
           ->setFamily($f2)
           ->addContinent($c1)
           ->addContinent($c2)
           ->addContinent($c3)
           ->addContinent($c4)
           ->addContinent($c5);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('pig')
           ->setDescription('pink pig')
           ->setImage('pig.png')
           ->setWeight(80)
           ->setDangerous(false)
           ->setFamily($f2)
           ->addContinent($c1)
           ->addContinent($c2)
           ->addContinent($c3)
           ->addContinent($c4);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('snake')
           ->setDescription('dangerous snake')
           ->setImage('snake.png')
           ->setWeight(10)
           ->setDangerous(true)
           ->setFamily($f1)
           ->addContinent($c1)
           ->addContinent($c2)
           ->addContinent($c3)
           ->addContinent($c4);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setName('crocodile')
           ->setDescription('dangerous crocodile')
           ->setImage('croco.png')
           ->setWeight(180)
           ->setDangerous(true)
           ->setFamily($f1)
           ->addContinent($c2)
           ->addContinent($c3)
           ->addContinent($c4);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setName('shark')
           ->setDescription('dangerous shark')
           ->setImage('shark.png')
           ->setWeight(350)
           ->setDangerous(true)
           ->setFamily($f3)
           ->addContinent($c1)
           ->addContinent($c2)
           ->addContinent($c3)
           ->addContinent($c4);
        $manager->persist($a5);

        $manager->flush();
    }
}
