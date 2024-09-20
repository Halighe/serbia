<?php

namespace App\Form;

use App\Entity\Participant;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, EmailType, ChoiceType};
class PeronalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fio', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Введите Ф.И.О',
                'class'=> 'profilelk__input input__clear',
                'maxlength'=>'100',
            ],
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Введите Email',
                'class'=> 'profilelk__input input__clear',
                'maxlength'=>'256',
            ],
            ])
            // ->add('phone', TextType::class, [
            //     'label' => false,
            //     'attr' => ['placeholder' => 'Введите телефон',
            //     'class'=> 'profilelk__input input__clear',
            //     'name'=>'phonereg',
            //     'id'=>'phonereg',
            //     'maxlength'=>'20',
            //     'required' =>'true',
            // ],
            // ])
            ->add('city', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Выберите город',
                'class'=> 'profilelk__input profilelk__input-city',
            ],
            ])
            ->add('category', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Выберите категорию',
                'class'=> 'profilelk__input profilelk__input-cat',
            ],
            ])
            ->add('school', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Введите наименование учебного заведения',
                'class'=> 'profilelk__input profilelk__input-span input__clear',
                'maxlength'=>'156',
            ],
            ])
            // ->add('adult', ChoiceType::class, [
            //     'label' => false,
            //     'choices'  => [
            //         'Да' => true,
            //         'Нет' => false,
            //     ],
            //     'attr' => [
            //     'expanded' => true,
            //     'multiple'=>false,                
            // ],
            // ])
            ->add('representative', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => ['placeholder' => 'Введите Ф.И.О. представителя',
                'class'=> 'profilelk__input input__clear',
                'maxlength'=>'100',                
            ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
            'attr' => ['class' => 'profilelk__form',
            'id' => 'profile-form'],
        ]);
    }
}
