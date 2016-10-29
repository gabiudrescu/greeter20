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

            $greeter = $this->get('app.greeter');
            $name = $form->getData()['name'] ? $form->getData()['name'] : $form->getData()['common_names'];
            $greeting = $greeter->greet($name);

            $this->addFlash('success', $greeting);
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'greeter' => $form->createView()
        ));
    }
}
