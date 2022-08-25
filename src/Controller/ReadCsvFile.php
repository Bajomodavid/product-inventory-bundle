<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReadCsvFile extends Controller
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