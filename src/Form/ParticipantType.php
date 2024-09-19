<?php

namespace App\Form;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, EmailType, ChoiceType, NumberType};
class ParticipantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('fio')
            ->add('fio', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Ф.И.О',
                'class'=> 'reg__input input__clear',
                // 'maxlength'=>'100',
                // 'required' =>'true',
            ],
            ])
            // ->add('email')
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Email',
                'class'=> 'reg__input input__clear',
                // 'maxlength'=>'256',
                // 'required' =>'true',
            ],
            ])
            // ->add('phone')
            // ->add('phone', NumberType::class, [
            //     'label' => false,
            //     'attr' => ['placeholder' => 'Введите телефон',
            //     'class'=> 'reg__input input__clear',
            //     'name'=>'phonereg',
            //     'id'=>'phonereg',
            //     // 'maxlength'=>'20',
            //     // 'required' =>'true',
            // ],
            // ])
            // ->add('city')
            ->add('city', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Выберите город',
                'class'=> 'reg__input reg__input-city',
                // 'required' =>'true',
            ],
            ])
            // ->add('category')
            ->add('category', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Выберите категорию',
                'class'=> 'reg__input reg__input-cat',
                // 'required' =>'true',
            ],
            ])
            // ->add('school')
            ->add('school', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите наименование учебного заведения',
                'class'=> 'reg__input reg__input-360 input__clear',
                // 'maxlength'=>'156',
                // 'required' =>'true',
            ],
            ])
            ->add('adult', ChoiceType::class, [
                'label' => false,
                'choices'  => [
                    'Да' => true,
                    'Нет' => false,
                ],
                'attr' => ['class'=> 'reg__radio'],
                'expanded' => true,
                'multiple'=>false,                           
            ])
            // ->add('representative')
            ->add('representative', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Ф.И.О представителя',
                'class'=> 'reg__input reg__input-profname input__clear reg__input-label-last-enable',
                // 'maxlength'=>'100',
            ],
            ])

            

            // ->add('adult', ChoiceType::class, [
            //     'label' => false,
            //     'choices'  => [
            //         'Да' => true,
            //         'Нет' => false,
            //     ],
            //     'attr' => ['class'=> 'reg__radio'],
            //     'expanded' => true,
            //     'multiple'=>false,                
            //     // 'name'=>'namereg',
            //     // 'id'=>'namereg',,
            //     // 'required' =>'true',
            
            // ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
            'attr' => [
                'class' => 'reg__form',
                'autocomplete' => "off",
                'novalidate' => "novalidate",
                'id' => 'regform'
        ],
        ]);
    }
}
