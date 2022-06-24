<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bucket;

class BucketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bucketContent = [
            ['name' => 'A', 'size' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'B', 'size' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'C', 'size' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'D', 'size' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'E', 'size' => 8, 'created_at' => now(), 'updated_at' => now()],
        ];
        Bucket::insert($bucketContent);
    }
}
