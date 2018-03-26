<?php

namespace HolidayBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\EmailType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use HolidayBundle\Entity\HolidayType;
use HolidayBundle\Repository\HolidayTypeRepository; 
use HolidayBundle\Entity\Approval; 
use HolidayBundle\Repository\ApprovalRepository; 
use Symfony\Bundle\SecurityBundle\Tests\Functional\app;
use HolidayBundle\Entity\User; 
use HolidayBundle\Repository\UserRepository; 

class HolidayRequestType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateHolidayDebut', DateType::class)
                ->add('dateHolidayEnd',  DateType::class)
                ->add('requestDate', DateType::class)
                ->add('modifyOn')
                // ->add('userRequest')
                ->add('userApproval', EntityType::class,[
                    'class' => User::class, 
                     'query_builder' => function(UserRepository $er){
                         return $er->createQueryBuilder('u')->orderBy('u.login', 'DESC');                        
                     },
                     'choice_label' =>function($x){
                     return strtoupper($x->getLogin());
                     }
                ])
                ->add('HolidayType', EntityType::class, [
                    'class'=> HolidayType::class, 
                    'query_builder' => function(HolidayTypeRepository $er){
                        return $er->createQueryBuilder('u')->orderBy('u.type', 'DESC');
                    },
                    'choice_label' => function($x){
                        return strtoupper($x->getType()); 
                    }
                ])
                ->add('envoyer', SubmitType::class )
                ->setMethod('POST')
                ->setAction('traiterFormHolidayRequest');

    }/**
     * {@inheritdoc}
     */            
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HolidayBundle\Entity\HolidayRequest'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'holidaybundle_holidayrequest';
    }


}
