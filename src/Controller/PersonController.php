<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class PersonController extends Controller
{
    public function new(Request $request){
        $em = $this->getDoctrine()->getManager();
        $personne = new Person();

        $form=  $this->createFormBuilder($personne)
            ->add('name',TextType::class)
            ->add('age',IntegerType::class)
            ->add("visible", CheckboxType::class)
            ->add('color', TextType::class)
            ->add('sumbitPersonne', SubmitType::class, array('label'=>'Créer'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $personne->setCreatedAt(new \DateTime('now'));
            $em->persist($personne);
            $em->flush();
        }

        return $this->render("Person/new.html.twig",array('form'=>$form->createView()));
    }

    public function index(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Person::class);
        $personnes = $repo->findAll();
        return $this->render("Person/index.html.twig", ["personnes"=>$personnes]);
    }
}