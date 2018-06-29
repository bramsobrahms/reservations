<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Locality;

class LocalityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
		
		$tabLocalities = [
			'1000'=>'Bruxelles',
			'1020'=>'Laeken',
			'1030'=>'Schaerbeek',
			'1050'=>'Ixelles',
			'1200'=>'Woluwe-Saint-Lambert',
			'1210'=>'Saint-Josse-ten-Noode',
		];
		
		foreach($tabLocalities as $cp => $designation) {
			$locality = new Locality();
			$locality->setPostalCode($cp);
			$locality->setLocality($designation);
			
			$manager->persist($locality);
		}
		
        $manager->flush();
    }
}
