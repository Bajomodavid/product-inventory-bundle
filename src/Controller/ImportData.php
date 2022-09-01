<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

class ImportData
{
    private array $records;

    public function __construct(array $records)
    {
        $this->records = $records;
    }

    public function storeRecords()
    {
//        Store records in DB
    }

    public function storeData()
    {
//        Create or update record
    }

    public function insertRecords()
    {}
}