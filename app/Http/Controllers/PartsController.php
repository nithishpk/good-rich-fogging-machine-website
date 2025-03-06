<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PartsController extends Controller
{
    private function getProductData()
    {
        $jsonPath = config_path('data/product-data.json');
        return json_decode(File::get($jsonPath), true);
    }

    public function spraying()
    {
        $productData = $this->getProductData();
        return view('pages.parts.spraying', [
            'parts' => $productData['parts']['spraying_components']
        ]);
    }

    public function maintenance()
    {
        $productData = $this->getProductData();
        return view('pages.parts.maintenance', [
            'parts' => $productData['parts']['maintenance_parts']
        ]);
    }
}
