<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Role;

class RoleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tabRoles = [
			'admin',
			'membre',
			'vip',
		];
		
		foreach($tabRoles as $nom) {
			$role = new Role();
			$role->setRole($nom);
			
			$manager->persist($role);
		}

        $manager->flush();
    }
}
