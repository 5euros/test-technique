<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $lipsum = file_get_contents(__DIR__.'/../../resources/lipsum.txt');
        $descriptions = explode(PHP_EOL, $lipsum);

        foreach ($descriptions as $key => $description) {
            $manager->persist(new Product(sprintf('Product #%s', $key+1), $description));
        }

        $manager->flush();
    }
}
