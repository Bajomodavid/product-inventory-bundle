<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Component\HttpFoundation\UrlHelper;

class ReadCsvFile
{
    private $path;
    private $records;
    private $projectRoot;

    public function __construct(string $projectRoot)
    {
        $this->projectRoot = $projectRoot;
    }

    public function readFile()
    {
        dd($this->projectRoot);
    }

    public function formatRecords()
    {

    }
}