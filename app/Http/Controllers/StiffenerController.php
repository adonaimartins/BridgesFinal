<?php

namespace App\Http\Controllers;

use App\Models\Stiffener;
use App\Models\Bay;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class StiffenerController extends Controller
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


        return view('forms.stiffeners.index', [ 
            'bays' => $allBays,
            'stiffeners' => $stiffenersBidi,
            'stiffenersList' => Stiffener::where('bay_id', session('bay'))->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.stiffeners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Stiffener();
        $product->bay_id = session('bay');
        $product->stiffener_number = request('stiffener_number');
        $product->type = request('type');
        $product->save();

        return redirect(route('stiffeners.index'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stiffener  $stiffener
     * @return \Illuminate\Http\Response
     */
    public function show($stiffener)
    {
        return view('forms.stiffeners.show', [
            'stiffener' => Stiffener::findOrFail($stiffener)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stiffener  $stiffener
     * @return \Illuminate\Http\Response
     */
    public function edit($stiffener)
    {
        return view('forms.stiffeners.edit', [ 'stiffener' => Stiffener::findOrFail($stiffener)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stiffener  $stiffener
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $stiffener)
    {
        $product = Stiffener::findOrFail($stiffener);
        $product->bay_id = session('bay');
        $product->stiffener_number = request('stiffener_number');
        $product->type = request('type');
        $product->update();

        Session::flash('message', 'Successfully updated stiffener!');
        return Redirect::to('stiffeners');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stiffener  $stiffener
     * @return \Illuminate\Http\Response
     */
    public function destroy($stiffener)
    {
        $stiffener = Stiffener::findOrFail($stiffener);
        $stiffener->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the stiffener!');
        return Redirect::to('stiffeners');
    }
}
