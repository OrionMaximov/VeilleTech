<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Categories;
use App\Entity\Site;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker= Factory::create('fr_FR');
        
        for($i=0;$i<15;$i++){
            $categories = new Categories();
                $categories->setReseau($faker->safeColorName())
                    ->setServer($faker->safeColorName())
                    ->setLanguage($faker->safeColorName())
                    ->setApi($faker->safeColorName());
                          
        
                    for($k=0;$k<3;$k++){
                    $site= new Site();
                    $site->setSite($faker->safeColorName()); 
                    $site->setBook($faker->safeColorName());
                    $categories->setType($site);
                    $manager->persist($site);
            }
            $manager->persist($categories); 
        }
        $manager->flush();
    }
}
