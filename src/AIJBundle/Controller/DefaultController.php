<?php

namespace AIJBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * @Route("/")
 */
class DefaultController extends Controller
{
        /**
         * @Route("/", name="accueil")
         * @Template()
         */
    public function indexAction(Request $request)
        {
                $titre ="Bienvenue sur AIJ";
                $slogan = "“NOTRE SAVOIR FAIRE AU SERVICE DE VOTRE COMMUNICATION GLOBALE : IDENTITÉ, STRATÉGIE, WEB & PRINT “";
                return array(
                  'titre' => $titre,
                  'slogan' => $slogan,
                );
        }

        /**
         * @Route("/contact", name="contact")
         * @Template()
         */
    public function contactAction(Request $request)
        {
                $titre ="Nous contacter";
                $slogan = "";
                return array(
                  'titre' => $titre,
                  'slogan' => $slogan,
                );
        }

        /**
         * @Route("/realisations", name="realisations")
         * @Template()
         */
    public function realisationsAction(Request $request)
        {
                $titre ="Réalisations";
                $slogan = "“VOUS PROPOSER LES MEILLEURES RÉALISATIONS“";
                return array(
                  'titre' => $titre,
                  'slogan' => $slogan,
                );
        }

        /**
         * @Route("/notre-agence", name="notre-agence")
         * @Template()
         */
    public function agenceAction(Request $request)
        {
                $titre ="Notre Agence";
                $slogan = "“ VOUS ACCOMPAGNER DANS TOUS VOS PROJETS ” ";
                return array(
                  'titre' => $titre,
                  'slogan' => $slogan,
                );
        }
}
