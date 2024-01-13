<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Item;
use App\Models\Enemy;

class AdminController extends Controller
{
    public function index()
    {
        $heroeCounter = Hero::count();
        $itemCounter = Item::count();
        $enemyCounter = Enemy::count();

        $list = [
            [
                'name' => 'Heroes',
                'counter' => $heroeCounter,
                'route' => 'heroes.index',
                'class' => 'btn-primary',
            ],
            [
                'name' => 'Items',
                'counter' => $itemCounter,
                'route' => 'items.index',
                'class' => 'btn-warning',
            ],
            [
                'name' => 'Enemigos',
                'counter' => $enemyCounter,
                'route' => 'enemies.index',
                'class' => 'btn-danger',
            ],
        ];

        return view('admin.index', ['report' => $list]);
    }
}
