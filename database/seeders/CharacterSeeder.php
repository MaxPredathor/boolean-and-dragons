<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
            $item->save();
        }
    }
}
