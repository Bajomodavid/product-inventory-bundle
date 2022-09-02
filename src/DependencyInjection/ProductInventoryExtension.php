<?php

/**
 * ProductInventoryExtension class.
 */

namespace BajomoDavid\ProductInventoryBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * ProductInventoryExtension
 */
class ProductInventoryExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $container
            ->register('bajomo_david_product_inventory_bundle.store_stock', 'BajomoDavid\ProductInventoryBundle\Controller\ImportData')
            ->addArgument('@doctrine.orm.entity_manager');
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yaml');
    }
}