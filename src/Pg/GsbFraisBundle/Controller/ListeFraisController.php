<?php

namespace Pg\GsbFraisBundle\Controller;

require_once('include/fct.inc.php');
require_once ('include/class.pdogsb.inc.php');

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use PdoGsb;

class ListeFraisController extends Controller
{
    public function indexAction()
    {
        $session = $this->container->get('request')->getSession();
        $idVisiteur = $session->get('id');
        $pdo = PdoGsb::getPdoGsb();
        $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
        if($this->get('request')->getMethod() == 'GET'){
            // Afin de séléctionner par défault le dernier mois dans la zone de liste
            // on demande toutes les clés et on prends la première,
            // les mois étant triés par ordre décroissants
            $lesCles = array_keys($lesMois);
            $moisASelectionner = $lesCles[0];
            return $this->render('PgGsbFraisBundle:ListeFrais:listeMois.html.twig',
                    array('lesmois'=>$lesMois, 'lemois'=>$moisASelectionner));
        }else{
            $request = $this->get('request');
            $leMois = $request->request->get('lstMois');
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $leMois);
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $leMois);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur, $leMois);
            $numAnnee = substr($leMois, 0, 4);
            $numMois = substr ($leMois, 4, 2);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif = $lesInfosFicheFrais['dateModif'];
            $dateModif = dateAnglaisVersFrancais($dateModif);
            return $this->render('PgGsbFraisBundle:ListeFrais:listetouslesfrais.html.twig',
                    array('lesmois'=>$lesMois, 'lesfraisforfait'=>$lesFraisForfait, 
                        'lesfraishorsforfait'=>$lesFraisHorsForfait, 'lemois'=>$leMois, 
                        'numannee'=>$numAnnee, 'nummois'=>$numMois, 'libetat'=>$libEtat,
                        'montantvalide'=>$montantValide, 'nbjustificatifs'=>$nbJustificatifs,
                        'datemodif'=>$dateModif));
        }
    }
}