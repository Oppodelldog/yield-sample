<?php

namespace Sample\Generator;

use Sample\Repo\ItemRepository;
use Sample\Repo\ItemRepositoryInterface;

class GeneratorItemRepository implements ItemRepositoryInterface
{
    private ItemRepository $repo;
    private ItemModelDenormalizer $denormalizer;

    public function __construct()
    {
        $this->repo = new ItemRepository();
        $this->denormalizer = new ItemModelDenormalizer();
    }

    /**
     * @return ItemModel[]
     */
    public function getItems(): iterable
    {
        foreach ($this->repo->getItems() as $data) {
            yield $this->denormalizer->denormalize($data);
        }
    }
}