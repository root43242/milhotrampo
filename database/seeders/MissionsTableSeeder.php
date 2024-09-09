<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mission;

class MissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mission::create([
            'name' => 'Hotel Bahamas',
            'description' => 'https://www.bahamashotel.com.br/images/galeria/a04b8989db4ec0a58784c53834c871e0.jpeg',
            'photo_url' => 'https://www.bahamashotel.com.br/images/logo.png',
            'points' => 1000,
        ]);
        Mission::create([
            'name' => 'Hotel Holiday Inn',
            'description' => 'https://digital.ihg.com/is/image/ihg/holiday-inn-express-and-suites-price-6592197246-2x1',
            'photo_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwlrYwwGLoHW5W9YEmLgI3zd_wRE0CnGQvSw&s',
            'points' => 1500,
        ]);
        Mission::create([
            'name' => 'Ibis',
            'description' => 'https://www.ahstatic.com/photos/a747_ho_00_p_1024x768.jpg',
            'photo_url' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Ibis_Logo_2011.png',
            'points' => 2500,
        ]);
    }
}
