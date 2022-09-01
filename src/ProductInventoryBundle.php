<?php

namespace BajomoDavid\ProductInventoryBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * ProductInventoryBundle
 */

class ProductInventoryBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}