<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $jsonPath = config_path('data/product-data.json');
        $productData = json_decode(File::get($jsonPath), true);

        return view('pages.services', [
            'equipmentServices' => $productData['services']['equipment_services'],
            'pestControlServices' => $productData['services']['pest_control_services'],
            'consultationServices' => $productData['services']['consultation']
        ]);
    }
}
