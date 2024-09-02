<?php

namespace App\Controller\Admin;

use App\Entity\Broadcast;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BroadcastCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Broadcast::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('city'),
            TextField::new('date'),
            // DateField::new('date')->setFormat('dd.MM.yyyy'),
            TextField::new('link'),
            ImageField::new('poster')->setUploadDir('public/uploads/broadcasts/')->setUploadedFileNamePattern('[contenthash].[extension]')
             ->hideOnIndex(),
        ];
    }
    
}
