<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            $newItem->image = TypeSeeder::storeimage(__DIR__ . '/images/icon_types/' . $typeData['name'] . '.jpg', $typeData['name']);
            $newItem->name = $typeData['name'];
            $newItem->desc = $typeData['desc'];
            $newItem->slug = Str::slug($typeData['name'], '-');
            $newItem->save();
        }
    }

    public static function storeimage($img, $name)
    {
        //$url = 'https:' . $img;
        $url = $img;
        $contents = file_get_contents($url);
        // $temp_name = substr($url, strrpos($url, '/') + 1);
        // $name = substr($temp_name, 0, strpos($temp_name, '?')) . '.jpg';
        $path = 'images/icon_types/' . $name . '.jpg';
        Storage::put('images/icon_types/' . $name . '.jpg', $contents);
        return $path;
    }
}
