<?php

namespace App\Form;

use App\Entity\Car;
use App\Entity\Episode;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

//        dd($episodesArray);

        $builder
            ->add('episodeNr', EntityType::class, [
                'class' => Episode::class,
                'multiple' => false,
                'expanded' => false,
                'label' => 'Episoden-Nr',
            ])
            ->add('carNr', IntegerType::class, [
                'label' => 'Auto-Nr'
            ])
            ->add('brand', TextType::class, [
                'label' => 'Marke'
            ])
            ->add('type', TextType::class, [
                'label' => 'Modell',
                'required' => false
            ])
            ->add('ccm', NumberType::class, [
                'attr' => array(
                    'placeholder' => '1.8',
                ),
                'label' => 'Hubraum',
                'required' => false
            ])
            ->add('hp', IntegerType::class, [
                'label' => 'PS',
                'required' => false
            ])
            ->add('km', IntegerType::class, [
                'label' => 'Kilometerstand',
                'required' => false
            ])
            ->add('year', IntegerType::class, [
                'attr' => array(
                    'placeholder' => '1977',
                ),
                'label' => 'Baujahr',
                'required' => false
            ])
            ->add('ps1', NumberType::class, [
                'attr' => array(
                    'placeholder' => '77.7',
                ),
                'label' => 'PS 1.Messung',
                'required' => false
            ])
            ->add('ps2', NumberType::class, [
                'label' => 'PS 2.Messung',
                'required' => false
            ])
            ->add('comment', TextType::class, [
                'label' => 'Bemerkungen',
                'required' => false
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'OK'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
