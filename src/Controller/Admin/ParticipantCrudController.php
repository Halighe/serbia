<?php

namespace App\Controller\Admin;

use App\Entity\Participant;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TelephoneField, EmailField, TextField, ChoiceField, BooleanField, AssociationField};
class ParticipantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Participant::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Участник')
            ->setEntityLabelInPlural('Участники')
            // ->setSearchFields(['title', 'text1'])
            // ->setDefaultSort(['createdAt' => 'DESC'])
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            AssociationField::new('user'),
            TextField::new('fio'),
            EmailField::new('email'),
            TelephoneField::new('phone'),
            TextField::new('city'),
            // TextField::new('category'),
            ChoiceField::new('category')->setChoices([
                "Категория 1" => "Категория 1", 
                // "Модератор" => "ROLE_ADMIN", 
                "Категория 2" => "Категория 2",
                "Категория 3" => "Категория 3",
            ])->hideOnIndex(),
            TextField::new('school')->hideOnIndex(),
            BooleanField::new('adult'),
            TextField::new('representative')->hideOnIndex(),
            TextField::new('recommendation')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions(['attr' => [                     // and  this function
                            'accept' => 'application/pdf'
                        ]])->hideOnIndex(),
        ];
    }
    
}
