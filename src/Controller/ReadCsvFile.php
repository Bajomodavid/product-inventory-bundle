<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Component\HttpFoundation\UrlHelper;

class ReadCsvFile
{
    private $path;
    private $records;
    private $projectDir;

    public function __construct(string $projectDir = '')
    {
        $this->projectDir = $projectDir;
    }

    public function readFile()
    {
        dd($this->projectDir);
    }

    public function formatRecords()
    {

    }
}