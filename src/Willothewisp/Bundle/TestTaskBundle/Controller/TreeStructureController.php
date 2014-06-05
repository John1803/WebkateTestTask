<?php

namespace Willothewisp\Bundle\TestTaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TreeStructureController extends Controller
{
    public function indexAction()
    {
        $categories = $this->get('willothewisp_test_task_bundle.tree_structure')
            ->getCategoriesWithProjects();

        $projects = $this->get('willothewisp_test_task_bundle.tree_structure')
            ->getProjectsWithExecutors();

        return $this->render('WillothewispTestTaskBundle:TreeStructure:index.html.twig', array(
            'projects' => $projects,
            'categories' => $categories,
        ));
    }
}
