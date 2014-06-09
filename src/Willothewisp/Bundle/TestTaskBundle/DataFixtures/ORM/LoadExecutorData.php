<?php

namespace Willothewisp\Bundle\TestTaskBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Willothewisp\Bundle\TestTaskBundle\Entity\Executor;

class LoadExecutorData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $cherkasyPostcard = new Executor();
        $cherkasyPostcard->setSecondName('Markow')
            ->setFirstName('Antin')
            ->setPatronymic('Johnovi4')
            ->setBirthday(new \DateTime('11.11.1981'))
            ->setCareerBeggining(new \DateTime('11.11.2011'))
            ->setEmail('markow@pisem.net')
            ->setPhoneNumber('380673257372')
            ->setAddress('Matrosova, 13')
            ->setTechnologyUsed('PhotoShop, HandMade')
            ->addProject($manager->merge($this->getReference('painting')))
            ->addProject($manager->merge($this->getReference('postcardDesign')))
        ;

        $jasonGraves = new Executor();
        $jasonGraves->setSecondName('Graves')
            ->setFirstName('Jason')
            ->setPatronymic('Forentovi4')
            ->setBirthday(new \DateTime('13.5.1986'))
            ->setCareerBeggining(new \DateTime('19.6.1997'))
            ->setEmail('grason@gmail.com')
            ->setPhoneNumber('991056786352')
            ->setAddress('USA')
            ->setTechnologyUsed('Composer')
            ->addProject($manager->merge($this->getReference('heroes')))
        ;

        $polRomero = new Executor();
        $polRomero->setSecondName('Romero')
            ->setFirstName('Pol')
            ->setPatronymic('Polovi4')
            ->setBirthday(new \DateTime('15.5.1986'))
            ->setCareerBeggining(new \DateTime('6.12.1997'))
            ->setEmail('rom@gmail.com')
            ->setPhoneNumber('99765656786352')
            ->setAddress('UK')
            ->setTechnologyUsed('Composer')
            ->addProject($manager->merge($this->getReference('heroes')))
        ;

        $chiUfeng = new Executor();
        $chiUfeng->setSecondName('Ufeng')
            ->setFirstName('Chi')
            ->setPatronymic('Chi')
            ->setBirthday(new \DateTime('11.9.1986'))
            ->setCareerBeggining(new \DateTime('13.11.1997'))
            ->setEmail('rom@gmail.com')
            ->setPhoneNumber('67865656786352')
            ->setAddress('China')
            ->setTechnologyUsed('President')
            ->addProject($manager->merge($this->getReference('perfectWorld')))
        ;

        $pauloMagalhaes = new Executor();
        $pauloMagalhaes->setSecondName('Magalhaes')
            ->setFirstName('Paulo')
            ->setPatronymic('Roberto')
            ->setBirthday(new \DateTime('1.9.1986'))
            ->setCareerBeggining(new \DateTime('2.2.1997'))
            ->setEmail('paulo@gmail.com')
            ->setPhoneNumber('865656786352')
            ->setAddress('Spain')
            ->setTechnologyUsed('Web, System Administration')
            ->addProject($manager->merge($this->getReference('postcrossing')))
        ;
        $paulaRibeiro = new Executor();
        $paulaRibeiro->setSecondName('Ribeiro')
            ->setFirstName('Paula')
            ->setPatronymic('Paul')
            ->setBirthday(new \DateTime('5.9.1986'))
            ->setCareerBeggining(new \DateTime('1.1.1997'))
            ->setEmail('paula@gmail.com')
            ->setPhoneNumber('865656786352')
            ->setAddress('Portugal')
            ->setTechnologyUsed('Forum super-moderation')
            ->addProject($manager->merge($this->getReference('postcrossing')))
        ;
        $patrickPligersdorffer = new Executor();
        $patrickPligersdorffer->setSecondName('Pligersdorffer')
            ->setFirstName('Patrick')
            ->setPatronymic('Patrick')
            ->setBirthday(new \DateTime('5.9.1981'))
            ->setCareerBeggining(new \DateTime('16.11.1999'))
            ->setEmail('patrick@gmail.com')
            ->setPhoneNumber('455656786352')
            ->setAddress('France')
            ->setTechnologyUsed('Co-founder')
            ->addProject($manager->merge($this->getReference('gameOfThrone')))
        ;
        $lirochonFanonel = new Executor();
        $lirochonFanonel->setSecondName('Fanonel')
            ->setFirstName('Lirochon')
            ->setPatronymic('Lirochon')
            ->setBirthday(new \DateTime('6.9.1981'))
            ->setCareerBeggining(new \DateTime('19.11.1999'))
            ->setEmail('lirochn@gmail.com')
            ->setPhoneNumber('985656786352')
            ->setAddress('France')
            ->setTechnologyUsed('Co-founder')
            ->addProject($manager->merge($this->getReference('gameOfThrone')))
            ->addProject($manager->merge($this->getReference('heroes')))
        ;

        $presidentialСandidate = new Executor();
        $presidentialСandidate ->setSecondName('Tomashevsky')
            ->setFirstName('Stephan')
            ->setPatronymic('Aaron')
            ->setBirthday(new \DateTime('8.4.1979'))
            ->setCareerBeggining(new \DateTime('14.7.2008'))
            ->setEmail('stephan@gmail.com')
            ->setPhoneNumber('30974562846')
            ->setAddress('Poland')
            ->setTechnologyUsed('Dirty PR')
            ->addProject($manager->merge($this->getReference('debate')))
        ;

        $manager->persist($cherkasyPostcard);
        $manager->persist($jasonGraves);
        $manager->persist($polRomero);
        $manager->persist($chiUfeng);
        $manager->persist($pauloMagalhaes);
        $manager->persist($paulaRibeiro);
        $manager->persist($patrickPligersdorffer);
        $manager->persist($lirochonFanonel);
        $manager->persist($presidentialСandidate);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}