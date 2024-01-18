<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Character extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'attack',
        'defence',
        'speed',
        'life',
        'image',
        'slug',
        'type_id'
    ];
    public static function getSlug($name)
    {
        $slug = Str::of($name)->slug('-');
        $count = 1;
        while (Character::where("slug", $slug)->first()) {
            $slug = Str::of($name)->slug('-') . "-{$count}";
            $count++;
        }
        return $slug;
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
