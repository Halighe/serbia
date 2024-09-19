<?php

namespace App\Form;

use App\Entity\Participant;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\{TextType, EmailType, ChoiceType, NumberType};

class ParticipantFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fio')
            ->add('email')
            ->add('phone')
            ->add('city')
            ->add('category')
            ->add('school')
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
            ->add('representative')
            // ->add('recommendation')
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'id',
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
            'attr' => [
                'class' => 'reg__form',
                // 'id' => 'regform'
            ],
        ]);
    }
}
