<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        // Read product data from JSON file
        $jsonPath = config_path('data/product-data.json');
        $productData = json_decode(File::get($jsonPath), true);

        return view('pages.products', [
            'mainProduct' => $productData['main_product']
        ]);
    }
}
