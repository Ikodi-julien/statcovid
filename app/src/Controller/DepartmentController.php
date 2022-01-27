<?php
 
namespace App\Controller;
 
use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
// use Symfony\UX\Chartjs\Model\Chart;

class DepartmentController extends AbstractController
{
    /**
     * @Route("/department/{dep}", name="app_department")
     */
    public function index(string $dep): Response
    {
        return $this->render('department/index.html.twig', [ 'name' => $dep ]);
    }
}