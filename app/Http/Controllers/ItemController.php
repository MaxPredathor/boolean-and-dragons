<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $item = $request->validated();
        $slug = Item::getSlug($item['name'], '-');
        $item['slug'] = $slug;
        if ($request->hasFile('image')) {
            $img_path = Storage::put('uploads_items', $item['image']);
            $item['image'] = $img_path;
        }
        $newItem = Item::create($item);
        return redirect()->route('admin.items.show', $newItem->slug);
    }

    /**
     * Display the specified resource.\
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\View\View
     */
    public function show(Item $item)
    {
        return view('admin.items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\View\View
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $data = $request->validated();
        $item->fill($data);
        if ($item->title !== $data['name']) {
            $slug = Item::getSlug($data['name'], '-');
        } else {
            $slug = $item->slug;
        }
        $data['slug'] = $slug;
        if ($request->hasFile('image')) {
            if (Storage::exists($item->image)) {
                Storage::delete($item->image);
            }
            $img_path = Storage::put('uploads_items', $data['image']);
            $data['image'] = $img_path;
        }
        $item->update();
        return redirect()->route('admin.items.show', $item->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index')->with('success', "Item $item->name deleted successfully");
    }
}
