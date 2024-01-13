<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = \App\Models\Item::all();
        return view('admin.items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->saveItem($request, null);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = \App\Models\Item::find($id);
        return view('admin.items.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->saveItem($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = \App\Models\Item::find($id);
        $item->delete();
        return redirect()->route('items.index');
    }

    
    public function saveItem(Request $request, $id)
    {
        if ($id) {
            $item = \App\Models\Item::find($id);
        } else {
            $item = new \App\Models\Item();
        }
        $item->name = $request->name;
        $item->hp = $request->hp;
        $item->atq = $request->atq;
        $item->def = $request->def;
        $item->luck = $request->luck;
        $item->cost = $request->cost;
        $item->save();
        return redirect()->route('items.index');
    }
}
