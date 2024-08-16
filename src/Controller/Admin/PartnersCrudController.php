<?php

namespace App\Controller\Admin;

use App\Entity\Partners;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TelephoneField, EmailField, TextField, ImageField, BooleanField, TextareaField};

class PartnersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Partners::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Партнер')
            ->setEntityLabelInPlural('Партнеры')
            // ->setSearchFields(['title', 'text1'])
            // ->setDefaultSort(['createdAt' => 'DESC'])
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            EmailField::new('email'),
            TelephoneField::new('phone'),
            TextField::new('organisation')->hideOnIndex(),
            ImageField::new('logo')->setUploadDir('public/uploads/partners/')->setUploadedFileNamePattern('[contenthash].[extension]')
                ->hideOnIndex(),
            // ImageField::new('logo'),
            TextareaField::new('description')->hideOnIndex(),
            TextField::new('link')->hideOnIndex(),
            BooleanField::new('active'),
            
        ];
    }
    
}
