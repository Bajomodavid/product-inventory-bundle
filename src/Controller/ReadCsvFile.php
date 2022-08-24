<?php

namespace Bajomodavid\ProductInventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReadCsvFile extends AbstractController
{
    private $path;
    private $records;
    private $projectRoot;

    public function __construct()
    {
        $this->projectRoot = $this->getParameter('kernel.project_dir');
    }

    public function readFile()
    {
        dd($this->projectRoot);
    }

    public function formatRecords()
    {

    }
}