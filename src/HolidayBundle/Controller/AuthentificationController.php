<?php
namespace HolidayBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response; 
use HolidayBundle\Form\UserType; 
use HolidayBundle\Entity\User; 


class AuthentificationController extends Controller {
    public  function inscriptionAction(Request $req){        
        $passwordEncoder= $this->get('security.password_encoder');  
        $user= new User();     
        $formulaire= $this ->createForm(UserType::class, $user);
        $formulaire->handleRequest($req);
         
        if($formulaire ->isValid() && $formulaire->isSubmitted()){
            $password=$passwordEncoder->encodePassword($user, $user->getPasswordOrginal());  
            $user->setPassword($password); 
            $em= $this->getDoctrine()->getManager(); 
            $em->persist($user); 
            $em->flush(); 
            return $this->redirectToRoute('connexion'); 
        }
        else {
            $var= ['formulaire'=>$formulaire->createView()]; 
            return $this-> render('HolidayBundleView/FormulairesControllerView/inscription.html.twig', $var);
        }       
       
    }
    public function connexionAction(){        
        $outilsAuthentification = $this->get('security.authentication_utils');
        $errors= $outilsAuthentification ->getLastAuthenticationError();
        $lastEmail= $outilsAuthentification->getLastUsername();
            $vars = ['errors' => $errors,
            'lastEmail' => $lastEmail];

        return $this->render('HolidayBundleView/FormulairesControllerView/login.html.twig', $vars); 
    }
    
}