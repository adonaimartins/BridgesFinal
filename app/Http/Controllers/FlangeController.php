<?php

namespace App\Http\Controllers;

use App\Models\Flange;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class FlangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.flanges.index', [ 'flanges' => Flange::where('girder_id', session('girder'))->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.flanges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*
            girder_id INT NOT NULL,
          //  position varchar(255) CHECK (position='TOP' OR position='BOTTOM'), 
            width_mm int,
            thickness_mm int,
            width_inches double(5,2),
            thickness_inches double(5,2),
         //  preffered_unit varchar(255)CHECK (preffered_unit='MM' OR preffered_unit='INCHES'),   

*/
        if(request('position') == '1' || request('position') == '2'){

            $product = new Flange();


            $product->girder_id = session('girder');//correct with sessions

            $product->position = request('position') == 1  ? 'TOP' : 'BOTTOM';


            if(request('preffered_unit') == '1'){
                $product->width_mm = request('width');//correct with sessions
                $product->thickness_mm = request('thickness');//correct with sessions
            }elseif(request('preffered_unit') == '2'){
                $product->width_inches = request('width');//correct with sessions
                $product->thickness_inches = request('thickness');//correct with sessions
            }
            $product->preffered_unit = request('preffered_unit') == 1  ? 'MM' : 'INCHES';
            $product->save();
        }



        return redirect(route('flanges.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flange  $flange
     * @return \Illuminate\Http\Response
     */
    public function show($flange)
    {
        return view('forms.flanges.show', [
            'flange' => Flange::findOrFail($flange)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flange  $flange
     * @return \Illuminate\Http\Response
     */
    public function edit($flange)
    {
        return view('forms.flanges.edit', [ 'flange' => Flange::findOrFail($flange)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flange  $flange
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $flange)
    {
        if(request('position') == '1' || request('position') == '2'){

            $product = Flange::findOrFail($flange);
            $product->girder_id = session('girder');//correct with sessions
            $product->position = request('position') == 1  ? 'TOP' : 'BOTTOM';

            if(request('preffered_unit') == '1'){
                $product->width_mm = request('width');//correct with sessions
                $product->thickness_mm = request('thickness');//correct with sessions
            }elseif(request('preffered_unit') == '2'){
                $product->width_inches = request('width');//correct with sessions
                $product->thickness_inches = request('thickness');//correct with sessions
            }
            $product->preffered_unit = request('preffered_unit') == 1  ? 'MM' : 'INCHES';
            $product->update();
        }
            Session::flash('message', 'Successfully updated flange!');
            return Redirect::to('flanges');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flange  $flange
     * @return \Illuminate\Http\Response
     */
    public function destroy($flange)
    {
        $flange = Flange::findOrFail($flange);
        $flange->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the flange!');
        return Redirect::to('flanges');
    }
}
