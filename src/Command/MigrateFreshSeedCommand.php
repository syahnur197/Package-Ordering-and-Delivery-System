<?php

namespace App\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpKernel\KernelInterface;

class MigrateFreshSeedCommand extends Command
{
    protected static $defaultName = 'migrate:fresh:seed';

    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        parent::__construct();

        $this->kernel = $kernel;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $command = $this->getApplication()->find('doctrine:database:drop');

        $dropDB = new ArrayInput([
            '--force' => true,
        ]);

        $command->run($dropDB, $output);

        $command = $this->getApplication()->find('doctrine:database:create');

        $createDB = new ArrayInput([]);

        $command->run($createDB, $output);

        $command = $this->getApplication()->find('doctrine:schema:update');

        $migrateDB = new ArrayInput([
            '--force' => true,
        ]);

        $command->run($migrateDB, $output);

        $command = $this->getApplication()->find('doctrine:fixture:load');

        $seedDB = new ArrayInput([]);
        $seedDB->setInteractive(false);

        $command->run($seedDB, $output);

        $io->success('Successfully migrate fresh and seed.');

        return Command::SUCCESS;
    }
}
