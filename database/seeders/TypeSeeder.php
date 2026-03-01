<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(['name' => 'メイン']);
        Type::create(['name' => '副菜A']);
        Type::create(['name' => '副菜B']);
    }
}
