<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Naruto Action Figure',
                'price' => 1800,
            ],
            [
                'name' => 'One Piece Action Figure',
                'price' => 1800,
            ],
            [
                'name' => 'Demon Slayer Hoodie',
                'price' => 1300,
            ],
            [
                'name' => 'Goju Saturo Hoodie',
                'price' => 1500,
            ]
            //dytoi py
        ];

    }
}
