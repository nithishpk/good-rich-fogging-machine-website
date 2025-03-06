<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $jsonPath = base_path('config/data/product-data.json');

            if (!File::exists($jsonPath)) {
                throw new \Exception("Product data file not found");
            }

            $jsonContent = File::get($jsonPath);
            $productData = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Invalid JSON format in product data");
            }

            $mainProduct = [
                'name' => $productData['main_product']['name'],
                'description' => $productData['main_product']['description'],
                'images' => $productData['main_product']['images'],
                'features' => $productData['main_product']['features'],
                'specifications' => $productData['main_product']['specifications']
            ];

            $parts = [
                'nozzle_system' => [
                    'name' => 'Professional Nozzle System',
                    'description' => 'Complete nozzle assembly with 3 spray patterns',
                    'image' => 'assets/images/parts/nozzle-system.jpg'
                ],
                'tank' => [
                    'name' => '12L Heavy-Duty Tank',
                    'description' => 'UV-stabilized tank with measurement markings',
                    'image' => 'assets/images/parts/tank.jpg'
                ],
                'motor' => [
                    'name' => '2000W Pure Copper Motor',
                    'description' => 'High-performance motor with thermal protection',
                    'image' => 'assets/images/parts/motor.jpg'
                ],
                'spray_lance' => [
                    'name' => 'Extended Spray Lance',
                    'description' => '3-meter professional grade spray lance',
                    'image' => 'assets/images/parts/spray-lance.jpg'
                ],
                'pressure_valve' => [
                    'name' => 'Pressure Control Valve',
                    'description' => 'Adjustable pressure control system',
                    'image' => 'assets/images/parts/pressure-valve.jpg'
                ],
                'filter_system' => [
                    'name' => 'Complete Filter Kit',
                    'description' => 'High-grade filter system for optimal performance',
                    'image' => 'assets/images/parts/filter-kit.jpg'
                ],
                'seals' => [
                    'name' => 'Professional Seal Kit',
                    'description' => 'Complete set of seals and O-rings',
                    'image' => 'assets/images/parts/seal-kit.jpg'
                ],
                'shoulder_strap' => [
                    'name' => 'Adjustable Shoulder Strap',
                    'description' => 'Heavy-duty comfortable shoulder strap',
                    'image' => 'assets/images/parts/shoulder-strap.jpg'
                ]
            ];


            $insecticidesChemicals = $productData['chemicals']['insecticides'];
            $sanitizersChemicals = $productData['chemicals']['sanitizers'];


            return view('pages.home', compact('mainProduct', 'parts', 'insecticidesChemicals', 'sanitizersChemicals'));
        } catch (\Exception $e) {
            // Fallback data if file reading fails
            $mainProduct = [
                'name' => 'Seesa Super 2000 Gold Sprayers Fogging Machine',
                'description' => 'Professional heavy-duty electric sprayer and fogging machine',
                'images' => ['/assets/images/products/seesa-2000-gold-main.jpg'],
                'features' => ['Advanced Technology', 'Superior Performance', 'Professional Grade'],
                'specifications' => [
                    'tank_capacity' => '12 liters',
                    'spray_distance' => '15-20 meters',
                    'power' => '2000W'
                ]
            ];

            $parts = [
                'nozzle_system' => [
                    'name' => 'Professional Nozzle System',
                    'description' => 'Complete nozzle assembly with 3 spray patterns',
                    'image' => 'assets/images/parts/nozzle-system.jpg'
                ],
                'tank' => [
                    'name' => '12L Heavy-Duty Tank',
                    'description' => 'UV-stabilized tank with measurement markings',
                    'image' => 'assets/images/parts/tank.jpg'
                ],
                'motor' => [
                    'name' => '2000W Pure Copper Motor',
                    'description' => 'High-performance motor with thermal protection',
                    'image' => 'assets/images/parts/motor.jpg'
                ],
                'spray_lance' => [
                    'name' => 'Extended Spray Lance',
                    'description' => '3-meter professional grade spray lance',
                    'image' => 'assets/images/parts/spray-lance.jpg'
                ],
                'pressure_valve' => [
                    'name' => 'Pressure Control Valve',
                    'description' => 'Adjustable pressure control system',
                    'image' => 'assets/images/parts/pressure-valve.jpg'
                ],
                'filter_system' => [
                    'name' => 'Complete Filter Kit',
                    'description' => 'High-grade filter system for optimal performance',
                    'image' => 'assets/images/parts/filter-kit.jpg'
                ],
                'seals' => [
                    'name' => 'Professional Seal Kit',
                    'description' => 'Complete set of seals and O-rings',
                    'image' => 'assets/images/parts/seal-kit.jpg'
                ],
                'shoulder_strap' => [
                    'name' => 'Adjustable Shoulder Strap',
                    'description' => 'Heavy-duty comfortable shoulder strap',
                    'image' => 'assets/images/parts/shoulder-strap.jpg'
                ]
            ];

            return view('pages.home', compact('mainProduct', 'parts'));
        }
    }
}
