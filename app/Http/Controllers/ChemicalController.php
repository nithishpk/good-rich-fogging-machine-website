<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ChemicalController extends Controller
{
    private function getProductData()
    {
        $jsonPath = config_path('data/product-data.json');
        return json_decode(File::get($jsonPath), true);
    }

    public function insecticides()
    {
        $productData = $this->getProductData();
        return view('pages.chemicals.insecticides', [
            'chemicals' => $productData['chemicals']['insecticides']
        ]);
    }

    public function sanitizers()
    {
        $productData = $this->getProductData();
        return view('pages.chemicals.sanitizers', [
            'chemicals' => $productData['chemicals']['sanitizers']
        ]);
    }

    public function index()
    {
        $productData = $this->getProductData();
        return view('pages.chemicals.index', [
            'chemicals' => $productData['chemicals']
        ]);
    }
}
