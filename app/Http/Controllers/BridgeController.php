<?php

namespace App\Http\Controllers;

use App\Models\Bridge;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;




class BridgeController extends Controller
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
        //
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
        
        /*request()->validate([               
            'producttype'=> 'required|in:cd,book',  
            'title' => 'required',
            'fname' => 'required',
            'sname' => 'required',
            'price' => ['required', 'min:0.01'],
            'pages' => ['required', 'min:1']        
        ]);    esto esta comentado es para validar el backend    */      

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
     * @param  \App\Models\Bridge  $bridge
     * @return \Illuminate\Http\Response
     */
    public function show($bridge)
    {
        session(['bridge' => $bridge]);

        return view('forms.bridges.show', [
            'bridge' => Bridge::findOrFail($bridge)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bridge  $bridge
     * @return \Illuminate\Http\Response
     */
    public function edit($bridge)
    {
        return view('forms.bridges.edit', [ 'bridge' => bridge::findOrFail($bridge)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bridge  $bridge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bridge)
    {

        $mileage_type = request('mileage_type');

        if($mileage_type == "1" || $mileage_type == "2"){

                $product = Bridge::findOrFail($bridge);
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
            echo $bridge;
            $product->update();
            Session::flash('message', 'Successfully updated bridge!');
            return Redirect::to('bridges');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bridge  $bridge
     * @return \Illuminate\Http\Response
     */
    public function destroy($bridge)
    {
        $bridge = Bridge::findOrFail($bridge);
        $bridge->delete();
        
        // redirect
        Session::flash('message', 'Successfully deleted the bridge!');
        return Redirect::to('bridges');
    }
}
