<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurant_details')->insert([
            'user_id' => 1,
            'restaurant_name' => 'Restaurant Name',
            'permit_id' => '123',
            'phone_no' => '123',
            'rest_address' => '123',
            'online_order_accept' => '1',
            'service_charge' => '0',
            'params' => json_encode([
                "payment_settings" => [
                    "ideal" => 1,
                    "card" => 1,
                    "cod" => 1
                ]
            ]),
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
    }
}
