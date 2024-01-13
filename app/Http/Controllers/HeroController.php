<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = \App\Models\Hero::all();
        return view('admin.heroes.index', ['heroes' => $heroes]);
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        return $this->saveHero($request, null);
    }

    public function edit($id)
    {
        $hero = \App\Models\Hero::find($id);
        return view('admin.heroes.edit', ['hero' => $hero]);
    }

    public function update(Request $request, $id)
    {
        return $this->saveHero($request, $id);
    }

    public function saveHero(Request $request, $id)
    {
        if ($id) {
            $hero = \App\Models\Hero::find($id);
        } else {
            $hero = new \App\Models\Hero();
            $hero->xp = 0;
            $hero->level_id = 1;
        }
        $hero->name = $request->name;
        $hero->hp = $request->hp;
        $hero->atq = $request->atq;
        $hero->def = $request->def;
        $hero->luck = $request->luck;
        $hero->coins = $request->coins;
        $hero->save();
        return redirect()->route('heroes.index');
    }

    public function destroy($id)
    {
        $hero = \App\Models\Hero::find($id);
        $hero->delete();
        return redirect()->route('heroes.index');
    }
}
