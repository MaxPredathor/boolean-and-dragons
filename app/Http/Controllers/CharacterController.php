<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Type;
use App\Models\Item;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $items = Item::all();
        $itemSorted = [];
        $simpleMelee = Item::where('category', 'Simple Melee Weapons')->get();
        $simpleRanged = Item::where('category', 'Simple Ranged Weapons')->get();
        $martialMelee = Item::where('category', 'Martial Melee Weapons')->get();
        $martialRanged = Item::where('category', 'Martial Ranged Weapons')->get();
        $itemsSorted[] = $simpleMelee;
        $itemsSorted[] = $simpleRanged;
        $itemsSorted[] = $martialMelee;
        $itemsSorted[] = $martialRanged;
        // dd($itemsSorted);
        return view('admin.characters.create', compact('types', 'itemsSorted', 'items'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        $formData = $request->validated();
        $slug = Character::getSlug($formData['name'], '-');
        $formData['slug'] = $slug;
        if ($request->hasFile('image')) {
            $img_path = Storage::put('uploads_character', $formData['image']);
            $formData['image'] = $img_path;
        }
        $formData['type_id'] = $request->type_id;
        $newCharacter = Character::create($formData);

        if ($request->has('items')) {
            $newCharacter->items()->attach($request->items);
        }
        return to_route('admin.characters.show', $newCharacter->slug)->with('success', 'Character created successfully' . $newCharacter->name);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        $types = Type::all();
        $items = Item::all();
        return view('admin.characters.edit', compact('character', 'types', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $formData = $request->validated();
        if ($character->title !== $formData['name']) {
            $slug = Character::getSlug($formData['name'], '-');
        } else {
            $slug = $character->slug;
        }
        $formData['slug'] = $slug;
        if ($request->hasFile('image')) {
            if (Storage::exists($character->image)) {
                Storage::delete($character->image);
            }
            $img_path = Storage::put('uploads_character', $formData['image']);
            $formData['image'] = $img_path;
        }
        $character->update($formData);
        return redirect()->route('admin.characters.show', $character->slug)->with('success', 'Character modified successfully' . $character->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return to_route('admin.characters.index')->with('success', "The Character $character->name has been successfully deleted.");
    }
}
