<?php

namespace App\Controller\Admin;

use App\Entity\University;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TextField, FormField, TextareaField, ImageField};

class UniversityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return University::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            FormField::addFieldset('Общая информация о ВУЗе'),
            TextareaField::new('name'),
            TextField::new('shortname')->setColumns(6),
            TextField::new('city')->setColumns(3),
            TextareaField::new('description')->hideOnIndex(),

            FormField::addFieldset('Контактная информация'),
            TextField::new('phone')->setColumns(3),
            TextField::new('email')->setColumns(3)->hideOnIndex(),
            TextField::new('adress')->setColumns(10)->hideOnIndex(),
            TextField::new('url')->setColumns(10)->hideOnIndex(),

            FormField::addFieldset('Координаты'),
            TextField::new('latitude')->setColumns(2)->hideOnIndex(),
            TextField::new('longitude')->setColumns(2)->hideOnIndex(),
            
            FormField::addFieldset('Образовательная информация'),
            TextField::new('level')->hideOnIndex(),  
            TextareaField::new('direction')->hideOnIndex(),            
            TextField::new('form')->hideOnIndex(),   
            TextareaField::new('foreigners')->hideOnIndex(),

            FormField::addFieldset('Изображения'),
            TextField::new('img1')->hideOnIndex(),
            TextField::new('img2')->hideOnIndex(),
            TextField::new('img3')->hideOnIndex(),
            // ImageField::new('img1')->setUploadedFileNamePattern('[contenthash].[extension]')
            //     ->setUploadDir('public/uploads/university/')->hideOnIndex(),
            // ImageField::new('img2')->setUploadedFileNamePattern('[contenthash].[extension]')
            //     ->setUploadDir('public/uploads/university/')->hideOnIndex(),
            // ImageField::new('img3')->setUploadedFileNamePattern('[contenthash].[extension]')
            //     ->setUploadDir('public/uploads/university/')->hideOnIndex(),
            
        ];
    }
    
}
