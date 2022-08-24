<?php

namespace BajomoDavid\ProductInventoryBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ReadStockData extends Command
{
    // In this function set the name, description and help hint for the command
    protected function configure(): void
    {
        // Use in-build functions to set name, description and help

        $this->setName('import-stock')
            ->setDescription('Imports stock data from CSV')
            ->setHelp('Run this command to import stock data.')
            ->addArgument('path', InputArgument::REQUIRED, 'Pass the path to the csv relative to the web root.');
    }

    // write the code you want to execute when command runs
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // If you want to write some output
        $output->writeln('Product inventory CSV importer');
        $output->writeln('Pass the stock data csv ' . $input->getArgument('path'));

        // Return below values according to the occurred situation

        if (SUCCESSFUL_EXECUTION_CONDITION) {

            // if everything is executed successfully with no issues then return SUCCESS as below
            return 0;

        } elseif (EXECUTION_FAILURE_CONDITION) {

            // if execution fails return FAILURE as below
            return 1;
        }
        return 0;
    }
}