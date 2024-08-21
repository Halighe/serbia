<?php

namespace App\Controller\Admin;

use App\Entity\Profile;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TextField, ImageField, FormField};
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class ProfileCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Profile::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('program')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions(['attr' => [                     // and  this function
                            'accept' => 'application/pdf'
                        ]]),
            ImageField::new('certificate')->setUploadedFileNamePattern('[contenthash].[extension]')
                ->setUploadDir('public/uploads/profiles/')->hideOnIndex(),

            FormField::addFieldset('Учебные заведения'),
            TextField::new('alluniversities')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions(['attr' => [                     // and  this function
                            'accept' => 'application/pdf'
                        ]]),
            TextField::new('robuniversities')
                        ->setFormType(FileUploadType::class)
                        ->setFormTypeOptions(['attr' => [                     // and  this function
                                    'accept' => 'application/pdf'
                                ]]),
            TextField::new('vruniversities')
                                ->setFormType(FileUploadType::class)
                                ->setFormTypeOptions(['attr' => [                     // and  this function
                                            'accept' => 'application/pdf'
                                        ]]),
            TextField::new('aruniversities')
                                        ->setFormType(FileUploadType::class)
                                        ->setFormTypeOptions(['attr' => [                     // and  this function
                                                    'accept' => 'application/pdf'
                                                ]]),

            
        ];
    }
    
}
