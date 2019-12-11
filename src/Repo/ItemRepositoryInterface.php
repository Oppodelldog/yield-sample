<?php

namespace Sample\Repo;

interface ItemRepositoryInterface
{
    public function getItems(): iterable;
}