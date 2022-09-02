<?php

namespace BajomoDavid\ProductInventoryBundle\Command;

use BajomoDavid\ProductInventoryBundle\Controller\ReadCsvFile;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ReadStockData extends Command
{
    private string $projectDir;

    public function __construct(string $projectDir = '')
    {
        $this->projectDir = $projectDir;
        parent::__construct();
    }
    // In this function set the name, description and help hint for the command
    protected function configure(): void
    {
        $this->setName('inventory:import-stock')
            ->setDescription('Imports stock data from CSV')
            ->setHelp('Run this command to import stock data.')
            ->addArgument('path', InputArgument::REQUIRED, 'Pass the path to the csv relative to the web root.');
    }

    // write the code you want to execute when command runs
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Product inventory CSV importer');
        $output->writeln('Pass the stock data csv full path');

        $processRecords = new ReadCsvFile($this->projectDir, $input->getArgument('path'));
        $records = [];
        try {
            $records = $processRecords->readFile();
        } catch (\Exception $exception) {
            $output->writeln($exception);
        }


        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yaml');

        $storeInDB = $container->get('app.inventory_import');
        $storeInDB->storeRecords($records);
        $output->writeln('Stock data imported successfully');
        return 0;
    }
}