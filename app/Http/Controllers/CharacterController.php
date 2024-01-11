<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use Illuminate\Support\Facades\Validator;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        $formData = $this->validation($request->all());
        $formData = $request->validated();
        $newCharacter = Character::create($formData);
        return to_route('characters.show', $newCharacter->id)->with('success', 'Character created successfully' . $newCharacter->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return to_route('characters.index')->with('success', 'Character deleted successfully' . $character->name);
    }
    private function validation($data)
    {
        $validation = Validator::make(
            $data,
            [
                'name' => 'required|min:5|max:200',
                'description' => 'nullable|max:500',
                'attack' => 'required|integer',
                'defence' => 'required|integer',
                'speed' => 'required|integer',
                'life' => 'required|integer'
            ],
            [
                'name.required' => 'The name is required',
                'attack.required' => 'The attack is required',
                'defence.required' => 'The defense is required',
                'speed.required' => 'The speed is required',
                'life.required' => 'The life is required',
                'name.min' => 'The name must be at least :min characters',
                'name.max' => 'The name must be at most :max characters',
                'description.max' => 'The description must be at most :max characters',
                'life.integer' => 'The life must be an integer',
                'attack.integer' => 'The attack must be an integer',
                'defence.integer' => 'The defence must be an integer',
                'speed.integer' => 'The speed must be an integer',
            ]
        )->validate();
        return $validation;
    }
}
