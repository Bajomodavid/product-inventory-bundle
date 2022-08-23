<?php

namespace Bajomodavid\ProductInventoryBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

class ProductSaleEvent extends Event
{
    public const NAME = 'product.sale';

    protected $sale;

    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }

    public function getOrder(): Sale
    {
        return $this->sale;
    }
}