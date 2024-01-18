<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Illuminate\Support\Str;
use App\Models\Type;
use App\Models\Item;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = Item::all();
        $types = Type::all();
        $json = file_get_contents(__DIR__ . '/data/characters.json');
        $content =  json_decode($json, true);
        foreach ($content as $characterData) {
            $item = new Character();
            $item->name = $characterData['name'];
            $item->description = $characterData['description'];
            $item->attack = $characterData['attack'];
            $item->defence = $characterData['defence'];
            $item->speed = $characterData['speed'];
            $item->life = $characterData['life'];
            $item->image = null;
            $item->type_id = $characterData['type_id'];
            $item->slug = Str::slug($characterData['name'], '-');
            $item->save();
            $item->items()->sync($items->pluck('id')->random(3));
        }
    }
}
