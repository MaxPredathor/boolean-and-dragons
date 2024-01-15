<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(__DIR__ . '/data/types.json');
        $content = json_decode($json, true);

        foreach ($content as $typeData) {
            $newItem = new Type();
            $newItem->name = $typeData['name'];
            $newItem->desc = $typeData['desc'];
            $newItem->save();
        }
    }
}