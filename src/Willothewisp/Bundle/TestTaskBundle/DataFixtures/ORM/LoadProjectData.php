<?php

namespace Willothewisp\Bundle\TestTaskBundle\DataFixtures\ORM;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;
use Willothewisp\Bundle\TestTaskBundle\Entity\Project;

class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $debate = new Project();
        $debate->setTitle('President debate')
            ->setCustomer('Political channel')
            ->setCreatedAt(new \DateTime('17.5.2014'))
            ->setCategory($manager->merge($this->getReference('politic')))
        ;

        $heroes = new Project();
        $heroes->setTitle('Heroes of might and magic VI')
            ->setCustomer('Black Hole Entertainment')
            ->setCreatedAt(new \DateTime('13.10.2011'))
            ->setCategory($manager->merge($this->getReference('game')))
        ;

        $perfectWorld = new Project();
        $perfectWorld->setTitle('Perfect World')
            ->setCustomer('Perfect World Entertainment')
            ->setCreatedAt(new \DateTime('2.09.2008'))
            ->setCategory($manager->merge($this->getReference('game')))
        ;

        $painting = new Project();
        $painting->setTitle('Exhibition Center')
            ->setCustomer('National Art Museum')
            ->setCreatedAt(new \DateTime('17.5.2014'))
            ->setCategory($manager->merge($this->getReference('art')))
        ;

        $postcardDesign = new Project();
        $postcardDesign->setTitle('National symbolic')
            ->setCustomer('Ukrainian State Enterprise of Posts "UKRPOSHTA"')
            ->setCreatedAt(new \DateTime('18.5.2014'))
            ->setCategory($manager->merge($this->getReference('design')))
        ;

        $postcrossing = new Project();
        $postcrossing->setTitle('Postcrossing')
            ->setCustomer('Postcrosser community')
            ->setCreatedAt(new \DateTime('19.5.2014'))
            ->setCategory($manager->merge($this->getReference('programming')))
        ;

        $gameOfThrone = new Project();
        $gameOfThrone->setTitle('Game of Throne')
            ->setCustomer('Browser game')
            ->setCreatedAt(new \DateTime('20.5.2014'))
            ->setCategory($manager->merge($this->getReference('programming')))
        ;
        $manager->persist($debate);
        $manager->persist($heroes);
        $manager->persist($perfectWorld);
        $manager->persist($painting);
        $manager->persist($postcardDesign);
        $manager->persist($postcrossing);
        $manager->persist($gameOfThrone);

        $manager->flush();

        $this->addReference('debate', $debate);
        $this->addReference('heroes', $heroes);
        $this->addReference('perfectWorld', $perfectWorld);
        $this->addReference('painting', $painting);
        $this->addReference('postcardDesign', $postcardDesign);
        $this->addReference('postcrossing', $postcrossing);
        $this->addReference('gameOfThrone', $gameOfThrone);

    }

    public function getOrder()
    {
        return 2;
    }

}