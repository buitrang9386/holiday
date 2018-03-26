<?php

namespace HolidayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\Validator\Constraints\DateTime;  
use BelgaControlBundle\Entity\Client; 
use BelgaControlBundle\Entity\Reservation; 
use Symfony\Component\HttpFoundation\JsonResponse;
use HolidayBundle\Entity\Employee; 
use HolidayBundle\Entity\HolidayStock; 

class HolidayController extends Controller{
    
     public function indexAction()
    {
        return $this->render('HolidayBundle:Default:index.html.twig');
    }
     public function loginAction()
    {
        return $this->render('HolidayBundleView/login.html.twig');
    }
     public function agendaAction()
    {
         $em=$this->getDoctrine()->getManager(); 
         $user= $this->getUser(); 
         $idEmployee= $user->getEmployee()->getId();          
         $employee= $em->getRepository(Employee::class)->findOneBy(array("id"=>$idEmployee));
         $User_id= $user->getId(); 
         $holiday= $em->getRepository(HolidayStock::class)->findAll(array("user_id"=>$User_id)); 
         //dump($holiday); 
//         die();
         $vars=["user"=>$user, "employee"=>$employee, "holiday"=>$holiday];         
        return $this->render('HolidayBundleView/agenda.html.twig', $vars);
    }
  
}