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
            ->add('fio', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Ф.И.О',
                'class'=> 'reg__input input__clear',
                'maxlength'=>'100',
                'required' =>'true',
            ],
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Email',
                'class'=> 'reg__input input__clear',
                'maxlength'=>'256',
                'required' =>'true',
            ],
            ])
            ->add('phone', NumberType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите телефон',
                'class'=> 'reg__input input__clear',
                'name'=>'phonereg',
                'id'=>'phonereg',
                'maxlength'=>'20',
                'required' =>'true',
            ],
            ])
            ->add('city', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Выберите город',
                'class'=> 'reg__input reg__input-city',
                'required' =>'true',
            ],
            ])
            ->add('category', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Выберите категорию',
                'class'=> 'reg__input reg__input-cat',
                'required' =>'true',
            ],
            ])
            ->add('school', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите наименование учебного заведения',
                'class'=> 'reg__input reg__input-360 input__clear',
                'maxlength'=>'156',
                'required' =>'true',
            ],
            ])
            ->add('adult', ChoiceType::class, [
                'label' => false,
                'choices'  => [
                    'Да' => true,
                    'Нет' => false,
                ],
                'attr' => [
                'expanded' => true,
                'multiple'=>false,                
                // 'name'=>'namereg',
                // 'id'=>'namereg','class'=> 'reg__radio',
                // 'required' =>'true',
            ],
            ])
            ->add('representative', TextType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Введите Ф.И.О представителя',
                'class'=> 'reg__input reg__input-profname input__clear',
                'maxlength'=>'100',
            ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
            'attr' => [
                'class' => 'reg__form',
                'id' => 'regform'
        ],
        ]);
    }
}
