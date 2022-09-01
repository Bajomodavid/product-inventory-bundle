# product-inventory-bundle
Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require bajomodavid/product-inventory-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require bajomodavid/product-inventory-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    BajomoDavid\ProductInventoryBundle\ProductInventoryBundle::class => ['all' => true],
];
```

###Step 3: Create migration
Then, create migration files by running

```console
php bin/console make:migration 
```

###Step 4: Run migrations 
Then run migrations with

```console
php bin/console doctrine:migrations:migrate
```

Usage
============
### Import Stock Data
To import csv record of stock data, run the command below

```console
 php bin/console inventory:import-stock path/to/csv-file
```

e.g
```console
php bin/console inventory:import-stock public/test-stock-file.csv
```

#### Note: The file path is relative to the project directory

#### Import record from post request
Send a post request to the app with the following parameters

```php
    $headers = array(
        array('x-action' => 'inventory-import'),
        ....Other headers
    );
    $body = array(
        'sku' => (string) $sku,
        'branch' => (string) $branch,
        'stock' => (int) $stock
    );
```
The record will be added if it does not exist, else it will be updated