<?php

namespace App\Http\Controllers;

use App\Models\Web;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.webs.index', [ 'webs' => Web::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.webs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            girder_id INT NOT NULL,
            length_mm int,
            height_mm int,
            width_mm int,
            thickness_mm int,
            length_inches double(5,2),
            height_inches double(5,2),
            width_inches double(5,2),
            thickness_inches double(5,2),


            preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),




        if($mileage_type == "1" || $mileage_type == "2"){

            $product = new Angle();
            $product->girder_id = session('girder');

            $product->position = request('position');


            if ($preffered_unit == "1"){
                $product->preffered_unit = 'MM';

                $product->position = (int) request('length_mm');
                $product->position = (int) request('height_mm');
                $product->position = (int) request('width_mm');
                $product->position = (int) request('thickness_mm');


            } else if ($preffered_unit == "2"){
                $product->preffered_unit = 'INCHES';

                $product->position = (double) request('length_inches');
                $product->position = (double) request('height_inches');
                $product->position = (double) request('width_inches');
                $product->position = (double) request('thickness_inches');

            }

            $product->save();
        }



        return redirect(route('webs.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function show($web)
    {
        return view('forms.webs.show', [
            'web' => Web::findOrFail($web)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function edit($web)
    {
        return view('forms.webs.edit', [ 'web' => Web::findOrFail($web)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $web)
    {
        $mileage_type = request('mileage_type');

        if($mileage_type == "1" || $mileage_type == "2"){

                $product = Web::findOrFail($web);
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

            $product->update();
            Session::flash('message', 'Successfully updated web!');
            return Redirect::to('webs');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Web  $web
     * @return \Illuminate\Http\Response
     */
    public function destroy($web)
    {
        $web = Web::findOrFail($web);
        $web->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the web!');
        return Redirect::to('webs');
    }
}
