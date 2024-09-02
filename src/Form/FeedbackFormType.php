<?php

namespace App\Form;

use App\Entity\Feedback;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, TextareaType};

class FeedbackFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Ф.И.О.',
                'class'=> 'fb__input input__clear',
                'maxlength'=>'100',
                'required' =>'true',
            ],
            ])
            ->add('email', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите E-mail',
                'class'=> 'fb__input input__clear',
                'maxlength'=>'100',
                'required' =>'true',
            ],
            ])
            
            ->add('phone', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите телефон',
                'class'=> 'fb__input input__clear',
                'maxlength'=>'20',
                'required' =>'true',
            ],
            ])
            ->add('question', TextareaType::class, [
                'label' => false,
                'attr' => [
                'class'=> 'fb__input fb__input-textarea',
                'maxlength'=>'4000',
                'required' =>'true',
            ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Feedback::class,
        ]);
    }
}
