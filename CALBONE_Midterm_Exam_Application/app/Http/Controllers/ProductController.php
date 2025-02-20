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
                'price' => 2800,
                'image' => 'https://chinarcart.com/cdn/shop/files/61If605pO6L_1024x1024.jpg?v=1719990779'
            ],
            [
                'name' => 'One Piece Action Figure',
                'price' => 1800,
                'image' => 'https://ichiba-japan.com/cdn/shop/files/luffy-special-figure-puchirama-dx-logbox-re-birth-02-one-piece-figure-megahouse-361752_1080x.jpg?v=1699506915'
            ],
            [
                'name' => 'Demon Slayer Hoodie',
                'price' => 1300,
                'image' => 'https://m.media-amazon.com/images/I/51u1BuQ42dL._AC_UY1000_.jpg'
            ],
            [
                'name' => 'Goju Saturo Hoodie',
                'price' => 1500,
                'image' => 'https://m.media-amazon.com/images/I/514YlcYMejL._AC_SY1000_.jpg'
            ]
            //dytoi py
        ];

        return view('products.index', compact('products'));

    }
}
