<?php

namespace App\Controller\Admin;

use App\Entity\Program;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TextField, DateField, ImageField, ChoiceField};

class ProgramCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Program::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('serialnumber')->setChoices([
                "1" => "1", 
                "2" => "2", 
                "3" => "3"
            ]),
            TextField::new('city'),
            // ImageField::new('image')->setUploadDir('public/uploads/program/')->setUploadedFileNamePattern('[contenthash].[extension]')
            //  ->hideOnIndex(),
            // DateField::new('date')->setFormat('dd.MM.yyyy'),
            TextField::new('date'),
            TextEditorField::new('address')->hideOnIndex(),
            TextEditorField::new('description')->hideOnIndex(),
        ];
    }
    
}
