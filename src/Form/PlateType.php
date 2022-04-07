<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\Plate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('kz', TextType::class, [
                'label' => 'Kennzeichen'
            ])
            ->add('name', TextType::class, [
                'label' => 'Stadt/Landkreis'
            ])
            ->add('lat', NumberType::class, [
                'label' => 'Latitude'
            ])
            ->add('lng', NumberType::class, [
                'label' => 'Longitude'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'OK'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Plate::class,
        ]);
    }
}
