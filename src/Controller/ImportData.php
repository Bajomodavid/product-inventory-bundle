<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use BajomoDavid\ProductInventoryBundle\Entity\StockData;
use Doctrine\ORM\EntityManager;

class ImportData
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function storeRecords(array $records)
    {
        foreach ($records as $record) {
            $this->storeOrUpdateData($record[0], $record[1], $record[2]);
        }
    }

    public function storeOrUpdateData($sku, $branch, $stock)
    {
        $entityManager = $this->entityManager;

        $stockData = new StockData();
        $stockData->setSku($sku);
        $stockData->setBranch($branch);
        $stockData->setStock($stock);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($stockData);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
    }
}