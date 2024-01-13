<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Enemy;

class BattleSystemController extends Controller
{
    public function index()
    {
        $hero = Hero::find(13)->first();
        $enemy = Enemy::find(1)->first();
        
        return view('admin.bs.index');
    }
}
