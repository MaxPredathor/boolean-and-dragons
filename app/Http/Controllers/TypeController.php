<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        $formdata = $request->validated();
        $slug = Type::getSlug($formdata['name'], '-');
        $formdata['slug'] = $slug;
        if ($request->hasFile('image')) {
            $path = Storage::put('uploads_types', $formdata['image']);
            $formdata['image'] = $path;
        } else {
            $formdata['image'] = null;
        }
        if ($request->hasFile('base_sprite')) {
            $path = Storage::put('uploads_types', $formdata['base_sprite']);
            $formdata['base_sprite'] = $path;
        } else {
            $formdata['base_sprite'] = null;
        }
        if ($request->hasFile('ascended_sprite')) {
            $path = Storage::put('uploads_types', $formdata['ascended_sprite']);
            $formdata['ascended_sprite'] = $path;
        } else {
            $formdata['ascended_sprite'] = null;
        }
        $type = Type::create($formdata);

        return to_route('admin.types.index')->with('message', "The Class $type->name has been successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        $formdata = $request->validated();
        // $type->fill($formdata);
        if ($type->title !== $formdata['name']) {
            $slug = Type::getSlug($formdata['name'], '-');
        } else {
            $slug = $type->slug;
        }
        $formdata['slug'] = $slug;
        if ($request->hasFile('image')) {
            if (Storage::exists($type->image)) {
                Storage::delete($type->image);
            }

            $path = Storage::put('uploads_types', $formdata['image']);
            $formdata['image'] = $path;
        }

        if ($request->hasFile('base_sprite')) {
            if (Storage::exists($type->base_sprite)) {
                Storage::delete($type->base_sprite);
            }

            $path = Storage::put('uploads_types', $formdata['base_sprite']);
            $formdata['base_sprite'] = $path;
        }

        if ($request->hasFile('ascended_sprite')) {
            if (Storage::exists($type->ascended_sprite)) {
                Storage::delete($type->ascended_sprite);
            }

            $path = Storage::put('uploads_types', $formdata['ascended_sprite']);
            $formdata['ascended_sprite'] = $path;
        }
        $type->update($formdata);
        return redirect()->route('admin.types.show', $type->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return to_route('admin.types.index')->with('message', "The Class $type->name has been successfully deleted");
    }
}
