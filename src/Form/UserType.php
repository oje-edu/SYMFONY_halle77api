<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\DBAL\Types\ArrayType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    private EntityManagerInterface $em;
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $em)
    {
        $this->userRepository = $userRepository;
        $this->em = $em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('email', EmailType::class, [
                'label' =>'Email',
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Passwort',
            ])
            ->add('Roles', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN',
                ],
                'label' => 'Rolle'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'OK'
            ])
        ;
        // Data transformer
        $builder->get('Roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesArray) {
                    // transform the array to a string
                    return count($rolesArray)? $rolesArray[0]: null;
                },
                function ($rolesString) {
                    // transform the string back to an array
                    return [$rolesString];
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
