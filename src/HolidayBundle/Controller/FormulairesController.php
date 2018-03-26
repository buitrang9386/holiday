<?php
namespace HolidayBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response; 
use HolidayBundle\Entity\HolidayRequest; 
use HolidayBundle\Form\HolidayRequestType; 

class FormulairesController extends Controller {
    public  function HolidayRequestAction(){
        
         $holidayRequest= new HolidayRequest(); 
        $formulaireRequest= $this ->createForm("HolidayBundle\Form\HolidayRequestType", $holidayRequest, 
                array('method'=>'Post', 
                    'action'=>$this->generateUrl('traiter_form_holidayRequest')));        
       $var= ['monFormulaireRequest'=> $formulaireRequest->createView()]; 
       return $this-> render('HolidayBundleView/FormulairesControllerView/HolidayRequest.html.twig', $var);
    }
     public function traiterFormHolidayRequestAction(Request $req){
      
         
      $formulaireHoliday= $this->createform("HolidayBundle\Form\HolidayRequestType");
      $formulaireHoliday->handleRequest($req);
      
      
      
      if($formulaireHoliday->isSubmitted() && $formulaireHoliday->isValid()){
          $holidayRequest = $formulaireHoliday->getData();
          $user = $this->getUser();
          $holidayRequest->setUserRequest($user);
          
          $em = $this->getDoctrine()->getManager();
          $em->persist($holidayRequest);
          $em->flush();
                  
          
          dump($holidayRequest);
          die();
      }
       return new Response('ok');
        
    }
}