<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{
    /**
     * @Route("/mail", name="mail")
     */
    public function index(): Response
    {
        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }



    //    /**
    //  * @Route("/{id}/email", name="customer_email", methods={"GET","POST"})
    //  */
    // public function email(Request $request, Customer $customer, Mailer $mailer): Response
    // {
    //     $form = $this->createForm(SendEmailToCustomerType::class);
    //     $form->handleRequest($request);

    //     if($form->isSubmitted() && $form->isValid()){
    //         $mailer->sendMail($customer->getEmail(), $form->getData()['subject'], $form->getData()['template']);

    //         $this->addFlash('success', 'Email envoyer');
    //         return $this->redirectToRoute("customer_email", ['id' => $customer->getId()]);
    //     }

    //     return $this->render('customer/index.html.twig', [
    //         // 'controller_name' => 'UserController',
    //         'customer' => $customer,
    //         'form' => $form->createView()
    //     ]);
    // }
}



