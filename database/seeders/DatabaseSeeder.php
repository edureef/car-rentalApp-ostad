<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(15)->create();

        User::factory()->create([
            'name' => 'Mr Admin',
            'email' => 'soft.rifat@gmail.com',
            'role' => 'admin',
        ]);

        Car::insert([
            [
                'name' => 'Model S',
                'brand' => 'Tesla',
                'model' => 'S',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 120.50,
                'availability' => true,
                'image' => 'tesla_model_s.jpg',
            ],
            [
                'name' => 'Civic',
                'brand' => 'Honda',
                'model' => 'Civic 2020',
                'year' => 2020,
                'car_type' => 'Sedan',
                'daily_rent_price' => 45.00,
                'availability' => true,
                'image' => 'honda_civic_2020.jpg',
            ],
            [
                'name' => 'Corolla',
                'brand' => 'Toyota',
                'model' => 'Corolla XLE',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 50.00,
                'availability' => false,
                'image' => 'toyota_corolla_xle.jpg',
            ],
            [
                'name' => 'Mustang GT',
                'brand' => 'Ford',
                'model' => 'Mustang GT',
                'year' => 2022,
                'car_type' => 'Sports',
                'daily_rent_price' => 150.00,
                'availability' => true,
                'image' => 'ford_mustang_gt.jpg',
            ],
            [
                'name' => 'Accord',
                'brand' => 'Honda',
                'model' => 'Accord LX',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 60.00,
                'availability' => false,
                'image' => 'honda_accord_lx.jpg',
            ],
            [
                'name' => 'Camry',
                'brand' => 'Toyota',
                'model' => 'Camry SE',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 55.00,
                'availability' => true,
                'image' => 'toyota_camry_se.jpg',
            ],
            [
                'name' => 'X5',
                'brand' => 'BMW',
                'model' => 'X5 2021',
                'year' => 2021,
                'car_type' => 'SUV',
                'daily_rent_price' => 110.00,
                'availability' => true,
                'image' => 'bmw_x5.jpg',
            ],
            [
                'name' => 'A6',
                'brand' => 'Audi',
                'model' => 'A6 Quattro',
                'year' => 2020,
                'car_type' => 'Sedan',
                'daily_rent_price' => 85.00,
                'availability' => false,
                'image' => 'audi_a6_quattro.jpg',
            ],
            [
                'name' => 'Explorer',
                'brand' => 'Ford',
                'model' => 'Explorer XLT',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 95.00,
                'availability' => true,
                'image' => 'ford_explorer_xlt.jpg',
            ],
            [
                'name' => 'Altima',
                'brand' => 'Nissan',
                'model' => 'Altima S',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 48.00,
                'availability' => false,
                'image' => 'nissan_altima_s.jpg',
            ],
            [
                'name' => 'Model 3',
                'brand' => 'Tesla',
                'model' => 'Model 3',
                'year' => 2023,
                'car_type' => 'Sedan',
                'daily_rent_price' => 100.00,
                'availability' => true,
                'image' => 'tesla_model_3.jpg',
            ],
            [
                'name' => 'Range Rover',
                'brand' => 'Land Rover',
                'model' => 'Sport 2022',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 200.00,
                'availability' => true,
                'image' => 'range_rover_sport.jpg',
            ],
            [
                'name' => 'Wrangler',
                'brand' => 'Jeep',
                'model' => 'Wrangler Unlimited',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 130.00,
                'availability' => true,
                'image' => 'jeep_wrangler_unlimited.jpg',
            ],
            [
                'name' => 'Rio',
                'brand' => 'Kia',
                'model' => 'Rio LX',
                'year' => 2020,
                'car_type' => 'Hatchback',
                'daily_rent_price' => 35.00,
                'availability' => false,
                'image' => 'kia_rio_lx.jpg',
            ],
            [
                'name' => 'Fusion',
                'brand' => 'Ford',
                'model' => 'Fusion Hybrid',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 65.00,
                'availability' => true,
                'image' => 'ford_fusion_hybrid.jpg',
            ],
            // [
            //     'name' => 'CX-5',
            //     'brand' => 'Mazda',
            //     'model' => 'CX-5 Touring',
            //     'year' => 2021,
            //     'car_type' => 'SUV',
            //     'daily_rent_price' => 80.00,
            //     'availability' => false,
            //     'image' => 'mazda_cx5_touring.jpg',
            // ],
            // [
            //     'name' => 'Charger',
            //     'brand' => 'Dodge',
            //     'model' => 'Charger R/T',
            //     'year' => 2022,
            //     'car_type' => 'Sedan',
            //     'daily_rent_price' => 95.00,
            //     'availability' => true,
            //     'image' => 'dodge_charger_rt.jpg',
            // ],
            // [
            //     'name' => 'Cherokee',
            //     'brand' => 'Jeep',
            //     'model' => 'Cherokee Limited',
            //     'year' => 2021,
            //     'car_type' => 'SUV',
            //     'daily_rent_price' => 100.00,
            //     'availability' => false,
            //     'image' => 'jeep_cherokee_limited.jpg',
            // ],
            // [
            //     'name' => 'Impreza',
            //     'brand' => 'Subaru',
            //     'model' => 'Impreza 2022',
            //     'year' => 2022,
            //     'car_type' => 'Sedan',
            //     'daily_rent_price' => 75.00,
            //     'availability' => true,
            //     'image' => 'subaru_impreza_2022.jpg',
            // ],
            // [
            //     'name' => 'Escalade',
            //     'brand' => 'Cadillac',
            //     'model' => 'Escalade ESV',
            //     'year' => 2022,
            //     'car_type' => 'SUV',
            //     'daily_rent_price' => 210.00,
            //     'availability' => true,
            //     'image' => 'cadillac_escalade_esv.jpg',
            // ]
        ]);
    }
}
