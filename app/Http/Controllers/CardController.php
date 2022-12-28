<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function card()
    {
        return view('card.index-card',[
            'cards' => Card::all(),
        ]);
    }
}
