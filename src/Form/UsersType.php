<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudonyme', TextType::class, [
                'attr'=> [
                    'class'=>'form-control'

                ],
                'label'=>'Votre pseudo :'

            ])
            ->add('password', TextType::class, [
                'attr'=> [
                    'class'=>'form-control'

                ],
                
                'label'=> 'Mot de Passe :'

            ])
            ->add('email', EmailType::class, [
                'attr'=> [
                    'class'=>'form-control'

                ],

                'label'=> 'Votre adresse Email :'

            ])
            ->add('numero', NumberType::class,
            [
                'attr'=> [
                    'class'=>'form-control'

                ],

            'label'=> 'Numero de téléphone (optionnel) : '
            ]);

            
            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
