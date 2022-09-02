<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use Symfony\Component\HttpFoundation\UrlHelper;

class ReadCsvFile
{
    private $records;
    private $projectDir;

    public function __construct(string $projectDir)
    {
        $this->projectDir = $projectDir;
    }

    public function readFile($path)
    {
        $file = $this->projectDir ."/". $path;
        $CSVfp = fopen($file, "r");
        if(!$CSVfp) {
            throw new \Exception("Invalid file path supplied, supply full path relative to project directory");
        }

        $firstRow = fgetcsv($CSVfp, 1000, ",");

        if (!$this->validateStructure($firstRow)) {
            throw new \Exception("Invalid CSV format");
        }

        while (($data = fgetcsv($CSVfp, 1000, ",")) !== FALSE)
        {
            $this->records[] = $data;
        }

        fclose($CSVfp);
        return $this->records;
    }

    public function validateStructure(array $row): bool
    {
        if (count($row) === 3) {
            if ($row[0] === "SKU" && $row[1] === "BRANCH" && $row[2] === "STOCK") {
                return true;
            }
        }
        return false;
    }
}