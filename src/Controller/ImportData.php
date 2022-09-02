<?php

namespace BajomoDavid\ProductInventoryBundle\Controller;

use BajomoDavid\ProductInventoryBundle\Entity\StockData;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImportData extends AbstractController
{
    private array $records;
    private $entityManager;

    public function __construct(array $records, $entityManager)
    {
        $this->records = $records;
        $this->entityManager = $entityManager;
    }

    public function storeRecords()
    {
        foreach ($this->records as $record) {
            $this->storeOrUpdateData($record[0], $record[1], $record[2]);
        }
    }

    public function storeOrUpdateData($sku, $branch, $stock)
    {
        $doctrine = $this->entityManager;
        $entityManager = $doctrine->getManager();

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