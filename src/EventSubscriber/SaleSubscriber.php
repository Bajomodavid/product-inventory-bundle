<?php

namespace BajomoDavid\ProductInventoryBundle\EventSubscriber;

use Bajomodavid\ProductInventoryBundle\Event\ProductSaleEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class SaleSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ProductSaleEvent::NAME => 'onStoreSale',
        ];
    }

    public function onStoreSale(ProductSaleEvent $event)
    {
        dd($event);
    }
}