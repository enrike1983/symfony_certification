<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

$cache = new FilesystemAdapter();

$numProducts = $cache->getItem('stats.num_products');

// assign a value to the item and save it
$numProducts->set(4711);
$cache->save($numProducts);

// retrieve the cache item
$numProducts = $cache->getItem('stats.num_products');

die(var_dump($numProducts));

if (!$numProducts->isHit()) {
    // ... item does not exists in the cache
}
// retrieve the value stored by the item
$total = $numProducts->get();

// remove the cache item
$cache->deleteItem('stats.num_products');