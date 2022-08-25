<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Component\HttpFoundation\UrlHelper;

class ReadCsvFile
{
    private $path;
    private $records;
    private $projectRoot;
    private $urlHelper;

    public function __construct(UrlHelper $urlHelper)
    {
        $this->urlHelper = $urlHelper;
    }

    public function readFile()
    {
        dd($this->urlHelper);
    }

    public function formatRecords()
    {

    }
}