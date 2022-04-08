<?php

namespace App\Form;

use App\Entity\Episode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('episodeNr', IntegerType::class, [
                'label' => 'Episoden-Nr.'
            ])
            ->add('title', TextType::class, [
                'label' => 'Titel'
            ])
            ->add('episodeUrl', TextType::class, [
                'label' => 'YT Adresse'
            ])
            ->add('thumbnailUrl', TextType::class, [
                'attr' => array(
                    'placeholder' => 'Vorschaubild',
                ),
                'label' => 'https://img.youtube.com/vi/\<YT-REFERENZ\>/0.jpg'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'OK'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Episode::class,
        ]);
    }
}
