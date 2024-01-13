<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnemyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enemies = \App\Models\Enemy::all();
        return view('admin.enemies.index', ['enemies' => $enemies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.enemies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->saveEnemy($request, null);
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
        $enemy = \App\Models\Enemy::find($id);
        return view('admin.enemies.edit', ['enemy' => $enemy]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->saveEnemy($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enemy = \App\Models\Enemy::find($id);
        $enemy->delete();
        return redirect()->route('enemies.index');
    }

    public function saveEnemy(Request $request, $id)
    {
        if ($id) {
            $enemy = \App\Models\Enemy::find($id);
        } else {
            $enemy = new \App\Models\Enemy();
        }
        $enemy->name = $request->name;
        $enemy->hp = $request->hp;
        $enemy->atq = $request->atq;
        $enemy->def = $request->def;
        $enemy->coins = $request->coins;
        $enemy->xp = $request->xp;
        $enemy->save();
        return redirect()->route('enemies.index');
    }
}
