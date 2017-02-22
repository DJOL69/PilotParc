<?php

namespace PilotParc\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PilotParc\LoginBundle\Entity\Tbutilisateurs;
use Symfony\Component\HttpFoundation\Session\Session;




class DefaultController extends Controller {

       public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PilotParcLoginBundle:Tbutilisateurs');
        if ($request->getMethod() == 'POST') {
            $session = new Session();
            $session = $request->getSession();
            $session->start();
            $email = $request->get('email');
            $motdepasse = sha1($request->get('motdepasse'));
            $tbutilisateurs = $repository->findOneBy(array('email' => $email, 'motdepasse' => $motdepasse));
            if ($tbutilisateurs) {

                $em = $this->getDoctrine()->getManager();
        		$placesmarche = $em->getRepository('PilotParcLoginBundle:Tbplacesmarche')->testps();

                return $this->render('PilotParcLoginBundle:Default:welcome.html.twig', array('prenom' => $tbutilisateurs->getPrenom(),
                'liste'=>$placesmarche));
            } else {

                $this->addFlash('notice','Email ou mot de passe incorrect');
                return $this->redirectToRoute('pilot_parc_login_homepage');
            }
        }
        else {
                return $this->render('PilotParcLoginBundle:Default:login.html.twig');
            }
        }
        

    

    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $motdepasse = $request->get('motdepasse');

            $tbutilisateurs = new Tbutilisateurs();
            $tbutilisateurs->setNom($nom);
            $tbutilisateurs->setPrenom($prenom);
            $tbutilisateurs->setEmail($email);
            $tbutilisateurs->setMotdepasse(sha1($motdepasse));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($tbutilisateurs);
            $em->flush();
            $this->addFlash('notice','Votre compte a bien été créé !');
            return $this->redirectToRoute('pilot_parc_login_homepage');
        }
        return $this->render('PilotParcLoginBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->clear();
        return $this->redirect ($this->generateUrl('pilot_parc_login_homepage'));
    }

    public function testAction()
    {
        $em = $this->getDoctrine()->getManager();
        $placesmarche = $em->getRepository('PilotParcLoginBundle:Tbplacesmarche')->test();

       return $this->render('PilotParcLoginBundle:Default:testdbal.html.twig', array('liste'=>$placesmarche));
    }


}
