<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use GrahamCampbell\Markdown\Facades\Markdown;

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
            // $newItem->image = TypeSeeder::storeimage(__DIR__ . '/images/icon_types/' . $typeData['name'] . '.webp', $typeData['name']);
            $newItem->skull_base = TypeSeeder::storeSkullSpriteBase(__DIR__ . '/images/icon_types/skull_sprite/' . $typeData['name'] . '-base.webp', $typeData['name']);
            $newItem->skull_ascended = TypeSeeder::storeSkullSpriteAscended(__DIR__ . '/images/icon_types/skull_sprite/' . $typeData['name'] . '-ascended.webp', $typeData['name']);
            $newItem->name = $typeData['name'];
            $newItem->boosted_stat = $typeData['boosted_stat'];
            $newItem->desc = Markdown::convertToHtml($typeData['desc']);
            $newItem->slug = Str::slug($typeData['name'], '-');
            $newItem->base_sprite = TypeSeeder::storeSpriteBase(__DIR__ . '/images/icon_types/sprites/' . strtolower($typeData['name']) . '-base.webp', strtolower($typeData['name']));
            $newItem->ascended_sprite = TypeSeeder::storeSpriteAscended(__DIR__ . '/images/icon_types/sprites/' . strtolower($typeData['name']) . '-ascended.webp', strtolower($typeData['name']));
            $newItem->save();
        }
    }


    // public static function storeimage($img, $name)
    // {
    //     //$url = 'https:' . $img;
    //     $url = $img;
    //     $contents = file_get_contents($url);
    //     // $temp_name = substr($url, strrpos($url, '/') + 1);
    //     // $name = substr($temp_name, 0, strpos($temp_name, '?')) . '.jpg';
    //     $path = 'images/icon_types/' . $name . '.webp';
    //     Storage::put('images/icon_types/' . $name . '.webp', $contents);
    //     return $path;
    // }

    public static function storeSpriteBase($img, $name)
    {
        $url = $img;
        $contents = file_get_contents($url);
        $path = 'images/icon_types/sprites/' . $name . '-base.webp';
        Storage::put('images/icon_types/sprites/' . $name . '-base.webp', $contents);
        return $path;
    }

    public static function storeSpriteAscended($img, $name)
    {
        $url = $img;
        $contents = file_get_contents($url);
        $path = 'images/icon_types/sprites/' . $name . '-ascended.webp';
        Storage::put('images/icon_types/sprites/' . $name . '-ascended.webp', $contents);
        return $path;
    }

    public static function storeSkullSpriteBase($img, $name)
    {
        $url = $img;
        $contents = file_get_contents($url);
        $path = 'images/icon_types/skull_sprite/' . $name . '-base.webp';
        Storage::put('images/icon_types/skull_sprite/' . $name . '-base.webp', $contents);
        return $path;
    }

    public static function storeSkullSpriteAscended($img, $name)
    {
        $url = $img;
        $contents = file_get_contents($url);
        $path = 'images/icon_types/skull_sprite/' . $name . '-ascended.webp';
        Storage::put('images/icon_types/skull_sprite/' . $name . '-ascended.webp', $contents);
        return $path;
    }
}
