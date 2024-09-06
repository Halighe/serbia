<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{PasswordType};

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('newpass', PasswordType::class, 
        [
            'label' => false,
            'attr' => ['placeholder' => 'Введите пароль',
            'class'=> 'pass__input input__pass',
            'minlength' =>"6",
            'maxlength'=>'64',
            'required' =>'true',
        ],
        ]
        )
        ->add('repnewpass', PasswordType::class, [
            'label' => false,
            'attr' => ['placeholder' => 'Повторите пароль',
            'class'=> 'pass__input input__pass',
            'minlength' =>"6",
            'maxlength'=>'64',
            'required' =>'true',
        ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'attr' => ['class' => 'pass__form',
            'id' => 'passwords'],            
        ]);
    }
}
