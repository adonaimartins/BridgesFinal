<?php

namespace App\Http\Controllers;

use App\Models\Girder;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class GirderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.girders.index', [ 'girders' => Girder::where('deck_id', session('deck'))->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.girders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if(request('elevation') != 'Select a elevation' && request('elevation') != 'Select a direction'){

            $product = new Girder();
            $product->deck_id = session('deck');//correct with sessions
            $product->girder_name = request('girder_name');
            $product->girder_direction = request('girder_direction') == 1  ? 'LEFT' : 'RIGHT';

            $product->elevation = request('elevation') == 1  ? 'INTERNALFACE' : 'EXTERNALFACE' ;
            $product->save();
        }

        return redirect(route('girders.index'));  
    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function show($girder)
    {
        session(['girder' => $girder]);

        return view('forms.girders.show', [
            'girder' => Girder::findOrFail($girder)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function edit($girder)
    {
        return view('forms.girders.edit', [ 'girder' => Girder::findOrFail($girder)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $girder)
    {
        $mileage_type = request('mileage_type');

        if(request('elevation') != 'Select a elevation' && request('elevation') != 'Select a direction'){

            $product = Girder::findOrFail($girder);
            $product->deck_id = session('deck');//correct with sessions
            $product->girder_name = request('girder_name');
            $product->girder_direction = request('girder_direction') == 1  ? 'LEFT' : 'RIGHT';

            $product->elevation = request('elevation') == 1  ? 'INTERNALFACE' : 'EXTERNALFACE' ;
            $product->update();

            Session::flash('message', 'Successfully updated girder!');
            return Redirect::to('girders');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Girder  $girder
     * @return \Illuminate\Http\Response
     */
    public function destroy($girder)
    {
        $girder = Girder::findOrFail($girder);
        $girder->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the girder!');
        return Redirect::to('girders');
    }
}
