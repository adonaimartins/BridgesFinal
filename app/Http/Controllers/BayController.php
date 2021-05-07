<?php

namespace App\Http\Controllers;

use App\Models\Bay;
use App\Models\Stiffener;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class BayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allBays = Bay::where('girder_id', session('girder'))->get();

        $stiffenersBidi = array();

        foreach ($allBays as $bay) {
            $stiffenerArray = Stiffener::where('bay_id', $bay->bay_id )->get();
            array_push($stiffenersBidi, $stiffenerArray);

        }

        return view('forms.bays.index', [ 
            'bays' => $allBays,
            'stiffeners' => $stiffenersBidi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.bays.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(request('preffered_unit') == '1' || request('preffered_unit') == '2'){

            $product = new Bay();

            $product->girder_id = session('girder');//correct with sessions
            $product->bay_position = request('bay_position');

            if(request('preffered_unit') == '1'){
                $product->length_mm = request('length');//correct with sessions
                $product->thickness_mm = request('thickness');//correct with sessions


            }elseif(request('preffered_unit') == '2'){
                $product->length_inches = request('length');//correct with sessions
                $product->thickness_inches = request('thickness');//correct with sessions
            }
            $product->preffered_unit = request('preffered_unit') == 1  ? 'MM' : 'INCHES';
            $product->save();
        }
        return redirect(route('bays.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function show($bay)
    {
        session(['bay' => $bay]);

        return view('forms.bays.show', [
            'bay' => Bay::findOrFail($bay),
            'stiffener' => Stiffener::where('bay_id', session('bay'))->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function edit($bay)
    {
        return view('forms.bays.edit', [ 'bay' => Bay::findOrFail($bay)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bay)
    {
            if(request('preffered_unit') == '1' || request('preffered_unit') == '2'){
                
                $product = Bay::findOrFail($bay);
                $product->girder_id = session('girder');//correct with sessions
                $product->bay_position = request('bay_position');

                if(request('preffered_unit') == '1'){
                    $product->length_mm = request('length');//correct with sessions
                    $product->thickness_mm = request('thickness');//correct with sessions
                }elseif(request('preffered_unit') == '2'){
                    $product->length_inches = request('length');//correct with sessions
                    $product->thickness_inches = request('thickness');//correct with sessions
                }
                $product->preffered_unit = request('preffered_unit') == 1  ? 'MM' : 'INCHES';
                $product->update();
            }
            Session::flash('message', 'Successfully updated bay!');
            return Redirect::to('bays');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bay  $bay
     * @return \Illuminate\Http\Response
     */
    public function destroy($bay)
    {
        $bay = Bay::findOrFail($bay);
        $bay->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the bay!');
        return Redirect::to('bays');
    }
}
