<?php

namespace Sample\Repo;

class ItemRepository implements ItemRepositoryInterface
{
    public function getItems(): iterable
    {
        return [
            [
                "firstName" => "Orangutanklaus",
            ],
        ];
    }
}