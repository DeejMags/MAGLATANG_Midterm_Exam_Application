<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'iPhone 15 Pro',
                'description' => 'Latest Apple flagship smartphone with A17 Pro chip',
                'price' => 999.99,
                'category' => 'Smartphones',
                'image' => 'iphone15pro.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Samsung Galaxy S24 Ultra',
                'description' => 'Premium Android smartphone with advanced AI features',
                'price' => 1199.99,
                'category' => 'Smartphones',
                'image' => 'galaxys24.jpg'
            ],
            [
                'id' => 3,
                'name' => 'MacBook Pro 16"',
                'description' => 'Powerful laptop with M2 Pro chip',
                'price' => 2499.99,
                'category' => 'Laptops',
                'image' => 'macbookpro.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Sony WH-1000XM5',
                'description' => 'Premium noise-cancelling headphones',
                'price' => 399.99,
                'category' => 'Audio',
                'image' => 'sonywh1000xm5.jpg'
            ],
            [
                'id' => 5,
                'name' => 'iPad Air',
                'description' => 'Versatile tablet for work and entertainment',
                'price' => 599.99,
                'category' => 'Tablets',
                'image' => 'ipadair.jpg'
            ]
        ];

        return view('products.index', compact('products'));
    }
} 