<?php

namespace App\Controller;

use App\Entity\Stats;
use App\Repository\StatsRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Mukadi\Chart\Chart;
use Mukadi\Chart\Utils\RandomColorFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatistiqueController extends AbstractController
{
    /**
     * @Route("/", name="statistique")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $stats = $em->getRepository(Stats::class)->findAll();
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Task', 'Hours per Day'],
                ['Statistique', count($stats)],
            ]
        );
        $pieChart->getOptions()->setTitle('My Daily Activities');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('statistique/index.html.twig', [
            'controller_name' => 'StatistiqueController',
            'piechart' => $pieChart
        ]);
    }
}
