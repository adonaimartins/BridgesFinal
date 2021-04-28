<?php

namespace App\Http\Controllers;

use App\Models\Girder;
use Illuminate\Http\Request;

class GirderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.bridges.index', [ 'bridges' => Bridge::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.bridges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mileage_type = request('mileage_type');

        if($mileage_type == "1" || $mileage_type == "2"){

                $product = new Bridge();
                $product->surveyor_name = request('surveyor_name');
                $product->surveyor_lastName = request('surveyor_lastName');
                $product->structure_name = request('structure_name');
                $product->structure_location = request('structure_location');
                $product->structure_number = request('structure_number');

            if ($mileage_type == "1"){
                $product->mileageMiles = (int) request('mileage');
            } else if ($mileage_type == "2"){
                $product->mileageYards = (int) request('mileage');
            }

            $product->save();
        }

        return redirect(route('bridges.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function show(Girder $girder)
    {
        return view('forms.bridges.show', [
            'bridge' => Bridge::findOrFail($bridge)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function edit(Girder $girder)
    {
        return view('forms.bridges.edit', [ 'bridge' => bridge::findOrFail($bridge)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Girder $girder)
    {
        $mileage_type = request('mileage_type');

        if($mileage_type == "1" || $mileage_type == "2"){

                $product = new Bridge();
                $product->surveyor_name = request('surveyor_name');
                $product->surveyor_lastName = request('surveyor_lastName');
                $product->structure_name = request('structure_name');
                $product->structure_location = request('structure_location');
                $product->structure_number = request('structure_number');

            if ($mileage_type == "1"){
                $product->mileageMiles = (int) request('mileage');
            } else if ($mileage_type == "2"){
                $product->mileageYards = (int) request('mileage');
            }

            $product->save();
            Session::flash('message', 'Successfully updated bridge!');
            return Redirect::to('bridges');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Girder $girder)
    {
        $bridge = Bridge::findOrFail($bridge);
        $bridge->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the bridge!');
        return Redirect::to('bridges');
    }
}
        CREATE TABLE IF NOT EXISTS Girders (
            girder_id INT AUTO_INCREMENT PRIMARY KEY,
            deck_id INT NOT NULL,
            girder_name varchar(255) NOT NULL,
            girder_direction varchar(255),
            elevation varchar(255), 
            FOREIGN KEY (deck_id) REFERENCES Decks(deck_id),
            CONSTRAINT CHK_Elevation CHECK (elevation='INTERNALFACE' OR elevation='EXTERNALFACE')
        );