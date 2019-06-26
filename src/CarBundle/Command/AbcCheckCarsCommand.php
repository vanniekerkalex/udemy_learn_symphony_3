<?php

namespace CarBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use CarBundle\Service\DataChecker;
use Doctrine\ORM\EntityManager;

class AbcCheckCarsCommand extends Command
{
    /** @var DataChecker */
    protected $carChecker;

    /** @var EntityManager */
    protected $manager;

    /**
     * AbcCheckCarsCommand constructor.
     *
     * @param EntityManager $manager
     * @param DataChecker $carChecker
     */
    public function __construct(DataChecker $carChecker, EntityManager $manager)
    {
        $this->manager = $manager;
        $this->carChecker = $carChecker;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('abc:check-cars')
            ->setDescription('...')
            ->addArgument('format', InputArgument::OPTIONAL, 'Progress format')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $carRepository = $this->manager->getRepository('CarBundle:Car');
        $cars = $carRepository->findAll();
        $bar = new ProgressBar($output, count($cars));
        
        $argument = $input->getArgument('format');

        $bar->setFormat($argument);
        $bar->start();

        foreach($cars as $car){
            $this->carChecker->checkCar($car);
            sleep(1);
            $bar->advance();
        }
        $bar->finish();
    }

}
