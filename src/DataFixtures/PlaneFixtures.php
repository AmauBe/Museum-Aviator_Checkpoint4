<?php

namespace App\DataFixtures;

use App\Entity\Plane;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PlaneFixtures extends Fixture implements DependentFixtureInterface
{

    const PLANES = [
        ['Model'=> 'Airbus A380-800', 'Constructor' => 'Airbus', 'year' => '2001', 'Category' => 'Avions Passagers'],
        ['Model'=> 'Airbus A320-200', 'Constructor' => "Airbus", 'year' => '1980', 'Category' => 'Avions Passagers'],
        ['Model'=> 'Boeing 747', 'Constructor' => 'Boeing', 'year' => '1958', 'Category' => 'Avions Passagers'],
        ['Model'=> 'Boeing 737', 'Constructor' => 'Boeing', 'year' => '1967', 'Category' => 'Avions Passagers'],
        ['Model'=> 'CRJ 1000', 'Constructor' => "Bombardier", 'year' => '1992', 'Category' => 'Avions Passagers'],
        ['Model'=> 'CRJ 705', 'Constructor' => "Bombardier", 'year' => '1997', 'Category' => 'Avions Passagers'],
        ['Model'=> 'Antonov An-225 Mriya', 'Constructor' => "Antonov", 'year' => '1988', 'Category' => 'Avions Cargo'],
        ['Model'=> 'Airbus A300-600ST', 'Constructor' => "Airbus", 'year' => '1994', 'Category' => 'Avions Cargo'],
        ['Model'=> 'Le Rafale', 'Constructor' => "Dassault Aviation", 'year' => '2001', 'Category' => 'Avions Militaire'],
        ['Model'=> 'Mirage 2000', 'Constructor' => 'Dassault Aviation', 'year' => '1970', 'Category' => 'Avions Militaire'],
        ['Model'=> 'Airbus A400M Atlas', 'Constructor' => "Airbus", 'year' => '2009', 'Category' => 'Avions Militaire'],
        ['Model'=> 'Wright Flyer', 'Constructor' => "Frères Wright", 'year' => '1903', 'Category' => 'Avions Historique'],
        ['Model'=> 'Le Morane-Saulnier Type L "Parasol" ', 'Constructor' => "Morane-Saulnier", 'year' => '1913', 'Category' => 'Avions Historique'],
        ['Model'=> 'Dewoitine D.520', 'Constructor' => "SNCAM", 'year' => '1940', 'Category' => 'Avions Historique']
        ];

  
        public function load(ObjectManager $manager): void
        { 
            foreach (self::PLANES as $key => $list){
                $plane = new plane();
                $plane->setModel($list['Model']);
                $plane->setConstructor($list['Constructor']);
                $plane->setYear($list['year']);
                $plane->setCategory($this->getReference('category_' . $list['Category']));
                $manager->persist($plane);
                $this->addReference('plane_' . $key, $plane);
            }
        $manager->flush();
    }
    public function getDependencies()

    {
    
        return [ 
            CategoryFixtures::class,];
    }
}