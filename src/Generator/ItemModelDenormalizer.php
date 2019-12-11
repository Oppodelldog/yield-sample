<?php

namespace Sample\Generator;

class ItemModelDenormalizer
{
    public function denormalize(array $data): ItemModel
    {
        $model = new ItemModel();
        $model->setFirstName($data['firstName']);

        return $model;
    }
}