<?php

namespace App\Controller\Admin;

use App\Entity\Participant;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, KeyValueStore};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\{TelephoneField, EmailField, TextField, ChoiceField, BooleanField, AssociationField};

class ParticipantCrudController extends AbstractCrudController
{

    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public static function getEntityFqcn(): string
    {
        return Participant::class;
    }
    public function configureActions(Actions $actions): Actions
    {
        $generateReport = Action::new('generateReport', 'Сгенерировать отчет')
            ->linkToCrudAction('generateReport')
            ->createAsGlobalAction();

        return $actions
            ->add(Crud::PAGE_INDEX, $generateReport);
    }
    public function generateReport(): Response
    {
        $participants = $this->entityManager->getRepository(Participant::class)->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ФИО');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Город');
        $sheet->setCellValue('D1', 'Категория');
        $sheet->setCellValue('E1', 'Совершеннолетний');

        $row = 2;
        foreach ($participants as $participant) {
            $sheet->setCellValue('A' . $row, $participant->getFio());
            $sheet->setCellValue('B' . $row, $participant->getEmail());
            $sheet->setCellValue('C' . $row, $participant->getCity());
            $sheet->setCellValue('D' . $row, $participant->getCategory());
            $sheet->setCellValue('E' . $row, $participant->isAdult() ? 'Да' : 'Нет');
            $row++;
        }


        $response = new StreamedResponse(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="participants_report.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
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
            //TelephoneField::new('phone'),
            TextField::new('city'),
            // TextField::new('category'),
            ChoiceField::new('category')->setChoices([
                "Школьник" => "Школьник",
                "Студент" => "Студент",
                "Преподаватель" => "Преподаватель",
                "Другая категория" => "Другая категория",
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
