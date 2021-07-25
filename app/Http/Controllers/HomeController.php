<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://indodax.com/api/pairs');
        $data_crypto = $response->json();

        $response = Http::get('https://indodax.com/api/ticker_all');
        $ticker = $response->json();

        return view('home', compact('data_crypto', 'ticker'));
    }
}
