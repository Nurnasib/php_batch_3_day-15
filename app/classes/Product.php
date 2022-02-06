<?php


namespace App\classes;


class Product
{
    protected $products;

    public function getAllProducts()
    {
        return [
            0 => [
                'id'          => '0',
                'price'       => '2299/-',
                'description' => 'Shirt',
                'brand'      => 'Brand: Levi',
                'category'      => 'Shirt',
                'image'       => 'sh1.jpg'
            ],
            1 => [
                'id'          => '1',
                'price'       => '3099/-',
                'description' => 'Shirt',
                'brand'      => 'Brand: Levi',
                'category'      => 'Shirt',
                'image'       => 'sh2.jpeg'
            ],
            2 => [
                'id'          => '2',
                'price'       => '5099/-',
                'description' => 'Sari',
                'brand'      => 'Brand: Levi',
                'category'      => 'Sari',
                'image'       => 'pp.jpg'
            ]
        ];
    }
    public function getProduct()
    {

    }
}