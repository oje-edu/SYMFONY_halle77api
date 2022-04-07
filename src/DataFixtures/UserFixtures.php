<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $plainText = 'changeme';

        $user = new User();
        $user->setRoles(['ROLE_ADMIN']);
        $user->setEmail('admin@admin.com');
        $user->setPassword($this->passwordHasher->hashPassword($user, $plainText));
        $manager->persist($user);

        $user2 = new User();
        $user2->setRoles(['ROLE_USER']);
        $user2->setEmail('test@test.com');
        $user2->setPassword($this->passwordHasher->hashPassword($user, $plainText));
        $manager->persist($user2);

        $manager->flush();
    }
}
