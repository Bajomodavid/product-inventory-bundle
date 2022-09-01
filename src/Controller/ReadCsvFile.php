<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReadCsvFile extends AbstractController
{
    private $path;
    private $records;
    private $projectDir;
    private $adminEmail;

    public function __construct()
    {
//        $this->projectDir = $this->getParameter('kernel.project_dir');
        $this->adminEmail = $this->getParameter('product_inventory.manager_email');
        dd($this->projectDir, $this->adminEmail);
    }

    public function readFile()
    {
        dd($this->projectDir);
    }

    public function formatRecords()
    {

    }
}