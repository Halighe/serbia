<?php

namespace App\Controller\Admin;

use App\Entity\{User, Review, Partners, Participant, Material, Feedback, University, Program};
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());       
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Сербия');
    }

    public function configureMenuItems(): iterable
    { 
        // yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Пользователи', 'fas fa-home', User::class);
        yield MenuItem::linkToCrud('Отзывы', 'fas fa-comments', Review::class);
        yield MenuItem::linkToCrud('Партнеры', 'fas fa-comments', Partners::class);
        yield MenuItem::linkToCrud('Участники', 'fas fa-comments', Participant::class);
        yield MenuItem::linkToCrud('Материалы', 'fas fa-comments', Material::class);
        yield MenuItem::linkToCrud('Обратная связь', 'fas fa-comments', Feedback::class);
        yield MenuItem::linkToCrud('Университеты', 'fas fa-comments', University::class);
        yield MenuItem::linkToCrud('Программа', 'fas fa-comments', Program::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
