<?php

namespace Bajomodavid\ProductInventoryBundle\Event;

use BajomoDavid\ProductInventoryBundle\Entity\StockData;
use Symfony\Contracts\EventDispatcher\Event;

class ProductSaleEvent extends Event
{
    public const NAME = 'product.sale';

    protected $sale;

    public function __construct(StockData $sale)
    {
        $this->sale = $sale;
    }

    public function getSale(): StockData
    {
        return $this->sale;
    }
}