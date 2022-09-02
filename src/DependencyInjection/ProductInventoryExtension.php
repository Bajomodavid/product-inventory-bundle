<?php

/**
 * ProductInventoryExtension class.
 */

namespace BajomoDavid\ProductInventoryBundle\DependencyInjection;

use BajomoDavid\ProductInventoryBundle\Controller\ReadCsvFile;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Doctrine\ORM\EntityManager;

/**
 * ProductInventoryExtension
 */
class ProductInventoryExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yaml');
    }
}