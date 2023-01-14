<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\CreateCardRequest;
use App\Http\Requests\Card\UpdateCardRequest;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::latest()->paginate(5);

        return view('card.index', compact('cards'));
    }

    public function store(CreateCardRequest $request)
    {
        $formdata = $request->validated();
        Card::create($formdata);
        return back()->with('create', 'Card created successfully');
    }

    public function edit(Card $card)
    {
        return view('card.edit', compact('card'));
    }

    public function updae(UpdateCardRequest $request,Card $card)
    {
        $formdata = $request->validated();
        $card->update($formdata);
        return redirect(route('card.index'))->with('update', 'Card updated successfully');
    }

    public function destroy(Card $card)
    {
        $card->delete();
        return back()->with('destroy', 'Card deleted successfully');
    }
}
