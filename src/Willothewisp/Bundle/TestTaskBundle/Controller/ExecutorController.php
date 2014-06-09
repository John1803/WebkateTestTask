<?php

namespace Willothewisp\Bundle\TestTaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Willothewisp\Bundle\TestTaskBundle\Entity\Executor;
use Willothewisp\Bundle\TestTaskBundle\Form\ExecutorType;

class ExecutorController extends Controller
{
    public function executorsAction()
    {
        $executors = $this->get('willothewisp_test_task_bundle.executor_repository')
            ->findAllOrderByCareerBeggining()
        ;

        $projects = $this->get('willothewisp_test_task_bundle.tree_structure')
            ->getProjectsWithExecutors();

        return $this->render('WillothewispTestTaskBundle:Executor:executors.html.twig', array(
            'executors' => $executors,
            'projects' => $projects,
        ));
    }
    public function createExecutorAction(Request $request)
    {
        $executor = new Executor();
        $form = $this->createForm(new ExecutorType(), $executor);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $om = $this->getDoctrine()->getManager();
            $om->persist($form->getData());
            $om->flush();

            return $this->redirect($this->generateUrl('_homepage'));
        }

        return $this->render('WillothewispTestTaskBundle:Executor:createExecutor.html.twig', array(
            'form' => $form->createView(),
        ));
    }
} 