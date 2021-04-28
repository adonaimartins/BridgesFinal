<?php

namespace App\Http\Controllers;

use App\Models\Bay;
use Illuminate\Http\Request;

class BayController extends Controller
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
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function show(Bay $bay)
    {
        return view('forms.bridges.show', [
            'bridge' => Bridge::findOrFail($bridge)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function edit(Bay $bay)
    {
        return view('forms.bridges.edit', [ 'bridge' => bridge::findOrFail($bridge)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bay $bay)
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
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bay $bay)
    {
        $bridge = Bridge::findOrFail($bridge);
        $bridge->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the bridge!');
        return Redirect::to('bridges');
    }
}
        CREATE TABLE IF NOT EXISTS Bays (
            bay_id INT AUTO_INCREMENT PRIMARY KEY,
            girder_id INT NOT NULL,
            bay_position varchar(255),
            length_mm int,
            thickness_mm int,
            length_inches double(5,2), 
            thickness_inches double(5,2),
            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),
            FOREIGN KEY (girder_id) REFERENCES Girders(girder_id)
        );