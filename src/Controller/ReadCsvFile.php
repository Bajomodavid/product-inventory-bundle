<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReadCsvFile
{
    private $path;
    private $records;
    private $projectDir;

    public function readFile()
    {
        $this->projectDir = $this->getParameter('kernel.project_dir');
        $adminEmail = $this->getParameter('product_inventory.manager_email');
        dd($this->projectDir, $adminEmail);
    }

    public function formatRecords()
    {

    }
}