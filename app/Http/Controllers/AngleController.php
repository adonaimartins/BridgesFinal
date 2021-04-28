<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use Illuminate\Http\Request;

class AngleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.angles.index', [ 'angles' => Angle::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.angles.create');

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

            $product = new Angle();
            $product->girder_id = request('girder_id');

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

        return redirect(route('angles.index'));    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angle  $angle
     * @return \Illuminate\Http\Response
     */
    public function show($angle)
    {
        return view('forms.angles.show', [
            'angle' => Angle::findOrFail($angle)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angle  $angle
     * @return \Illuminate\Http\Response
     */
    public function edit($angle)
    {
        return view('forms.angles.edit', [ 'angle' => Angle::findOrFail($angle)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Angle  $angle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $angle)
    {
        $mileage_type = request('mileage_type');

        if($mileage_type == "1" || $mileage_type == "2"){

            $product = Angle::findOrFail($angle);
            $product->girder_id = request('girder_id');

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

            $product->update();
            Session::flash('message', 'Successfully updated angle!');
            return Redirect::to('angles');
        }












    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angle  $angle
     * @return \Illuminate\Http\Response
     */
    public function destroy($angle)
    {
        $angle = Angle::findOrFail($angle);
        $angle->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the angle!');
        return Redirect::to('angles');
    }
}
