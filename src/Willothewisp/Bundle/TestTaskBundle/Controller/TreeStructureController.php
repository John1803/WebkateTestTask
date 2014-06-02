<?php

namespace Willothewisp\Bundle\TestTaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TreeStructureController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WillothewispTestTaskBundle:TreeStructure:index.html.twig', array('name' => $name));
    }
}
