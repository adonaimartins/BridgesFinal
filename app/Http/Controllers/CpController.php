<?php

namespace App\Http\Controllers;

use App\Models\Cp;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.cps.index', [ 'cps' => Cp::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.cps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if(
            (request('position') == '1' || request('position') == '2') && 
            (request('preffered_unit') == '1' || request('preffered_unit') == '2')
        ){

            $product = new Cp();

            $product->girder_id = session('girder');//correct with sessions
            $product->position = request('position') == 1  ? 'TOP' : 'BOTTOM';
            $product->location = request('location');//correct with sessions
            $product->stiffener_start = request('stiffener_start');//correct with sessions
            $product->stiffener_end = request('stiffener_end');//correct with sessions

            if(request('preffered_unit') == '1'){
                $product->preffered_unit = 'MM';
                $product->start_distance_mm = request('start_distance');
                $product->end_distance_mm = request('end_distance');
                $product->width_mm = request('width');
                $product->thickness_mm = request('thickness');//correct with sessions
            }elseif(request('preffered_unit') == '2'){
                $product->preffered_unit = 'INCHES';
                $product->start_distance_inches = request('start_distance');
                $product->end_distance_inches = request('end_distance');
                $product->width_inches = request('width');
                $product->thickness_inches = request('thickness');//correct with sessions
            }
            $product->save();
        }   

        return redirect(route('cps.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function show($cp)
    {
        return view('forms.cps.show', [
            'cp' => Cp::findOrFail($cp)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function edit($cp)
    {
        return view('forms.cps.edit', [ 'cp' => Cp::findOrFail($cp)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cp)
    {
        $mileage_type = request('mileage_type');

        if($mileage_type == "1" || $mileage_type == "2"){

                $product = Cp::findOrFail($cp);
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
            Session::flash('message', 'Successfully updated cp!');
            return Redirect::to('cps');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function destroy($cp)
    {
        $cp = Cp::findOrFail($cp);
        $cp->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the cp!');
        return Redirect::to('cps');
    }
}
