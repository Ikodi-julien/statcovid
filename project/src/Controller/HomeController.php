<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CallApiService;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CallApiService $callApiService): Response
    {
        // dd($callApiService->getDepsData());
        
        return $this->render('home/index.html.twig', [
            'franceData' => $callApiService->getFranceData()[0],
            'depsData' => $callApiService->getDepsData()
        ]);
    }
}

// [▼
//   "date" => "2022-01-24"
//   "tx_pos" => null
//   "tx_incid" => null
//   "TO" => 0.74654013444049
//   "R" => null
//   "rea" => 3776
//   "hosp" => 29748
//   "rad" => 498806
//   "dchosp" => 101723
//   "incid_rea" => 337
//   "incid_hosp" => 3353
//   "incid_rad" => 1993
//   "incid_dchosp" => 393
//   "conf" => null
//   "conf_j1" => 108481
//   "pos" => null
//   "esms_dc" => 27299
//   "dc_tot" => 129022
//   "pos_7j" => null
//   "cv_dose1" => null
//   "esms_cas" => 239276
// ]