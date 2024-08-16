<?php

namespace App\Controller\Admin;

use App\Entity\Material;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TextField, TextareaField, ImageField, FormField};
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class MaterialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Material::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Материал')
            ->setEntityLabelInPlural('Материалы')
            // ->setSearchFields(['title', 'text1'])
            // ->setDefaultSort(['createdAt' => 'DESC'])
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('name'),
            TextareaField::new('shorttext'),
            ImageField::new('icon')->setUploadDir('public/uploads/materials/icons/')->setUploadedFileNamePattern('[contenthash].[extension]')
            // ->setFileConstraints(new Image(maxWidth: '100'))
            ->hideOnIndex(),
    
            FormField::addFieldset('Первая часть'),
            TextEditorField::new('firstpart')->hideOnIndex(),
            ImageField::new('firstimg')->setUploadedFileNamePattern('[contenthash].[extension]')
                ->setUploadDir('public/uploads/materials/images/')->hideOnIndex(),
            TextField::new('firstimgsign')->hideOnIndex(),
            TextField::new('firstlink')->hideOnIndex(),

            FormField::addFieldset('Вторая часть'),
            TextEditorField::new('secondpart')->hideOnIndex(),
            ImageField::new('secondimg')->setUploadedFileNamePattern('[contenthash].[extension]')
                ->setUploadDir('public/uploads/materials/images/')->hideOnIndex(),
            TextField::new('secondimgsign')->hideOnIndex(),
            TextField::new('secondlink')->hideOnIndex(),

            FormField::addFieldset('Третья часть'),
            TextEditorField::new('thirdpart')->hideOnIndex(),
            TextField::new('pdf')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions(['attr' => [                     // and  this function
                            'accept' => 'application/pdf'
                        ]]),
            TextField::new('ptx')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions(['attr' => [                     // and  this function
                            'accept' => 'application/pptx'
                        ]])->hideOnIndex(),
            TextField::new('video')->hideOnIndex(),


        ];
    }
    
}
