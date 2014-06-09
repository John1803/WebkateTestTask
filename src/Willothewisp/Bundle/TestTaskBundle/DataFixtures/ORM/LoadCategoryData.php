<?php

namespace Willothewisp\Bundle\TestTaskBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Willothewisp\Bundle\TestTaskBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $game = new Category();
        $game->setTitle('Game');

        $politic = new Category();
        $politic->setTitle('Politic');

        $art = new Category();
        $art->setTitle('Art');

        $design = new Category();
        $design->setTitle('Design');

        $programming = new Category();
        $programming->setTitle('Programming');

        $manager->persist($game);
        $manager->persist($politic);
        $manager->persist($art);
        $manager->persist($design);
        $manager->persist($programming);
        $manager->flush();

        $this->addReference('game', $game);
        $this->addReference('politic', $politic);
        $this->addReference('art', $art);
        $this->addReference('design', $design);
        $this->addReference('programming', $programming);

    }

    public function getOrder()
    {
        return 1;
    }
}