<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index(){
        $characters = Character::all();
        return response()->json([
            'success' => true,
            'data' => $characters
        ]);
    }
    public function show($slug){
        $character = Character::where('slug', $slug)->with(['type', 'items'])->first();
        return response()->json([
            'success' => true,
            'data' => $character
        ]);
    }
}
