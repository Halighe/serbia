<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class RecoveryPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password', PasswordType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите старый пароль',
                'class'=> 'profilelk__input input__pass',
                'maxlength'=>'64',
                'required' =>'true',
            ],
            ])
            ->add('newpassword', PasswordType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите новый пароль',
                'class'=> 'profilelk__input input__pass',
                'maxlength'=>'64',
                'required' =>'true',
            ],
            ])
            ->add('repeatpassword', PasswordType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите новый пароль',
                'class'=> 'profilelk__input input__pass',
                'maxlength'=>'64',
                'required' =>'true',
            ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
             'attr' => [
                'class' => 'profilelk__pass-form',
                'autocomplete' => "off",
                'novalidate' => "novalidate",
                'id' => 'profile-pass-form'
        ],
        ]);
    }
}
