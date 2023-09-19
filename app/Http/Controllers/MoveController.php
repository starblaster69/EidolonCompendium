<?php

namespace App\Http\Controllers;

use App\Models\Move;

class MoveController
{
    public function index() {
        $moves = Move::all();

        return view('moves.index', compact('moves'));
    }
}
