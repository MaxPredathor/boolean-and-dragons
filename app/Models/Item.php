<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Character;


class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'type',
        'weight',
        'cost',
        'image'
    ];
    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
    public static function getSlug($name)
    {
        $slug = Str::of($name)->slug('-');
        $count = 1;
        while (Item::where("slug", $slug)->first()) {
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }
        return $slug;
    }
}
