<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(__DIR__ . '/data/items.json');
        $items = json_decode($json, true);
        // dd($items);
        foreach ($items as $item) {
            $newItem = new Item();
            $newItem->image = ItemSeeder::storeimage(__DIR__ . '/images/items_images/' . $item['name'] . '.png', $item['name']);
            $newItem->name = $item['name'];
            $newItem->category = $item['category'];
            $newItem->type = $item['type'];
            $newItem->weight = $item['weight'];
            $newItem->cost = $item['cost'];
            $newItem->slug = Str::slug($item['name'], '-');
            $newItem->damage_dice = $item['damage_dice'];
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
        $path = 'images/items_images/' . $name . '.png';
        Storage::put('images/items_images/' . $name . '.png', $contents);
        return $path;
    }
}
