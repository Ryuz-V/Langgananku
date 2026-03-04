<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Mobile Legends',
                'image' => 'mlbb.png',
                'category' => 'Game'
            ],
            [
                'id' => 2,
                'name' => 'Free Fire',
                'image' => 'freefire.png',
                'category' => 'Game'
            ],
            [
                'id' => 3,
                'name' => 'Valorant',
                'image' => 'valorant.png',
                'category' => 'Game'
            ],
            [
                'id' => 4,
                'name' => 'Spotify Premium',
                'image' => 'spotify.png',
                'category' => 'Entertainment'
            ],
            [
                'id' => 5,
                'name' => 'YouTube Premium',
                'image' => 'youtube.png',
                'category' => 'Entertainment'
            ],
            [
                'id' => 6,
                'name' => 'Netflix',
                'image' => 'netflix.png',
                'category' => 'Entertainment'
            ]
        ];

        $promotions = [
            'Diskon 20% untuk pembelian pertama',
            'Cashback 10% setiap akhir pekan',
            'Bonus diamond untuk top up di atas 100k'
        ];

        return view('home', compact('featuredProducts', 'promotions'));
    }
}
