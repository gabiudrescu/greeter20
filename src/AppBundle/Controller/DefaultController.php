<?php

namespace AppBundle\Controller;

use App\Greeter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\GreeterType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(GreeterType::class);

        $form->handleRequest($request);

        if($form->isValid())
        {
            $greeter = new Greeter();
            $greeting = $greeter->greet($form->getData()['name']);

            $this->addFlash('success', $greeting);
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'greeter' => $form->createView()
        ));
    }
}
