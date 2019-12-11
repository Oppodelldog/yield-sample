<?php

use Sample\Generator\GeneratorItemRepository;
use Sample\Repo\ItemRepository;

require __DIR__ . '/vendor/autoload.php';

$arrayRepo = new ItemRepository();
foreach ($arrayRepo->getItems() as $item) {
    echo $item['firstName'];
}

echo "\n";

$modelRepo = new GeneratorItemRepository();
foreach ($modelRepo->getItems() as $item) {
    echo  $item->getFirstName();
}