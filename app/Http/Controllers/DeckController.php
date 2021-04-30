<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class DeckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.decks.index', [ 'decks' => Deck::where('bridge_id', session('bridge'))->get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.decks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Deck();
        $product->bridge_id = session('bridge');//correct with sessions
        $product->deck_number = request('deck_number');
        $product->save();

        return redirect(route('decks.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function show($deck)
    {
        session(['deck' => $deck]);

        return view('forms.decks.show', [
            'deck' => Deck::findOrFail($deck)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function edit($deck)
    {
        return view('forms.decks.edit', [ 'deck' => Deck::findOrFail($deck)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $deck)
    {


        $product = Deck::findOrFail($deck);
        $product->bridge_id = session('bridge');//correct with sessions
        $product->deck_number = request('deck_number');

        $product->update();
        Session::flash('message', 'Successfully updated deck!');
        return Redirect::to('decks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deck  $deck
     * @return \Illuminate\Http\Response
     */
    public function destroy($deck)
    {
        $deck = Deck::findOrFail($deck);
        $deck->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the deck!');
        return Redirect::to('decks');
    }
}




/*CREATE TRIGGER tr_MyTable_Number
ON MyTable
INSTEAD OF INSERT
AS

SET TRANSACTION ISOLATION LEVEL SERIALIZABLE

BEGIN TRAN;

WITH MaxNumbers_CTE AS
(
    SELECT ParentEntityID, MAX(Number) AS Number
    FROM MyTable
    WHERE ParentEntityID IN (SELECT ParentEntityID FROM inserted)
)
INSERT MyTable (ParentEntityID, Number)
    SELECT
        i.ParentEntityID,
        ROW_NUMBER() OVER
        (
            PARTITION BY i.ParentEntityID
            ORDER BY (SELECT 1)
        ) + ISNULL(m.Number, 0) AS Number
    FROM inserted i
    LEFT JOIN MaxNumbers_CTE m
        ON m.ParentEntityID = i.ParentEntityID

COMMIT



this is the URL
https://stackoverflow.com/questions/2205036/sql-server-unique-auto-increment-column-in-the-context-of-another-column
*/