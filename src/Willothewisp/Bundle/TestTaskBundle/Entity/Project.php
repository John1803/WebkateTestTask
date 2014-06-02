<?php

namespace Willothewisp\Bundle\TestTaskBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Willothewisp\Bundle\TestTaskBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @Assert\Date()
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="customer", type="string", length=255)
     */
    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="projects")
     */

    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="Executor", mappedBy="projects")
     */

    private $executors;

    public function __construct()
    {
        $this->executors = new ArrayCollection();
    }
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Project
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Project
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set customer
     *
     * @param string $customer
     * @return Project
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Category $category
     * @return $this
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Willothewisp\Bundle\TestTaskBundle\Entity\Category
     */

    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param ArrayCollection $executors
     * @return $this
     */
    public function setExecutors(ArrayCollection $executors)
    {
        $this->executors = $executors;

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExecutors()
    {
        return $this->executors;
    }

    public function __toString()
    {
        return $this->getTitle();
    }
}