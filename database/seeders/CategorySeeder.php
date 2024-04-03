<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $objs = [
            'Food',
            'Entertainment',
            'Dance',
            'Fashion',
            'Sports'
        ];
        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj
            ]);
        }
    }
}
