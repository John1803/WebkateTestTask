<?php

namespace Willothewisp\Bundle\TestTaskBundle\TreeStructure;

use Willothewisp\Bundle\TestTaskBundle\Entity\CategoryRepository;
use Willothewisp\Bundle\TestTaskBundle\Entity\ExecutorRepository;
use Willothewisp\Bundle\TestTaskBundle\Entity\ProjectRepository;

class TreeStructure
{
    protected $executorRepository;

    protected $projectRepository;

    protected $categoryRepository;

    public function __construct(ExecutorRepository $executorRepository,
                                ProjectRepository $projectRepository,
                                CategoryRepository $categoryRepository )
    {
        $this->executorRepository = $executorRepository;
        $this->projectRepository = $projectRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategoriesWithProjects()
    {
        $categories = $this->categoryRepository
            ->findCategoriesAssociatedWithProjects();

        foreach($categories as $category) {
            $category->setProjects(
                $this->projectRepository
                    ->findProjectsByCategoryId($category->getId()));
        }

        return $categories;
    }

    public function getProjectsWithExecutors()
    {
        $projects = $this->projectRepository
            ->findProjectsAssociatedWithExecutors()
        ;

        foreach($projects as $project) {
            $project->setExecutors(
                $this->executorRepository->findExecutorsByProject($project->getId()));
        }

        return $projects;
    }
} 