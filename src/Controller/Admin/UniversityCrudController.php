<?php

namespace App\Controller\Admin;

use App\Entity\University;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TextField, FormField, TextareaField};

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
            TextareaField::new('description'),

            FormField::addFieldset('Контактная информация'),
            TextField::new('phone')->setColumns(3),
            TextField::new('email')->setColumns(3),
            TextField::new('adress')->setColumns(10),
            TextField::new('url')->setColumns(10),

            FormField::addFieldset('Координаты'),
            TextField::new('latitude')->setColumns(2),
            TextField::new('longitude')->setColumns(2),
            
            FormField::addFieldset('Образовательная информация'),
            TextField::new('level'),  
            TextareaField::new('direction'),            
            TextField::new('form'),   
            TextareaField::new('foreigners'),
        ];
    }
    
}
