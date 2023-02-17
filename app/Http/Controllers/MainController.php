<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function load()
    {
        $response = Http::get('http://makeup-api.herokuapp.com/api/v1/products.json?brand=maybelline');

        $goods = $response->json();

        return view('main', compact('goods'));
    }
}
