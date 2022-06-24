<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ball;

class BallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ballContent = [
            ['name' => 'Pink', 'size' => 2.5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Red', 'size' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blue', 'size' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Orange', 'size' => 0.8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Green', 'size' => 0.5, 'created_at' => now(), 'updated_at' => now()],
        ];
        Ball::insert($ballContent);
    }
}
