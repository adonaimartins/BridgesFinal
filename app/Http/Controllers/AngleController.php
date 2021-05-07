<?php

namespace App\Http\Controllers;

use App\Models\Angle;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class AngleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.angles.index', [ 'angles' => Angle::where('girder_id', session('girder'))->get()]);

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

            $product = new Angle();
            $product->girder_id = session('girder');

            switch (request('position')) {
                case 1:
                    $product->position = 'top-left';
                    break;

                case 2:
                    $product->position = 'top-right';
                    break;

                case 3:
                    $product->position = 'bottom-left';
                    break;

                case 4:
                    $product->position = 'bottom-right';
                    break;

                default:
                    //code here
            }

            if (request('preffered_unit') == "1"){
                $product->preffered_unit = 'MM';
                $product->length_mm = (int) request('length');
                $product->height_mm = (int) request('height');
                $product->width_mm = (int) request('width');
                $product->thickness_mm = (int) request('thickness');
                $product->save();

            } else if (request('preffered_unit') == "2"){
                $product->preffered_unit = 'INCHES';
                $product->length_inches = (double) request('length');
                $product->height_inches = (double) request('height');
                $product->width_inches = (double) request('width');
                $product->thickness_inches = (double) request('thickness');
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
            $product = Angle::findOrFail($angle);
            $product->girder_id = session('girder');

            switch (request('position')) {
                case 1:
                    $product->position = 'top-left';
                    break;

                case 2:
                    $product->position = 'top-right';
                    break;

                case 3:
                    $product->position = 'bottom-left';
                    break;

                case 4:
                    $product->position = 'bottom-right';
                    break;

                default:
                    //code here
            }

            if (request('preffered_unit') == "1"){
                $product->preffered_unit = 'MM';
                $product->length_mm = (int) request('length');
                $product->height_mm = (int) request('height');
                $product->width_mm = (int) request('width');
                $product->thickness_mm = (int) request('thickness');
                $product->update();


            } else if (request('preffered_unit') == "2"){
                $product->preffered_unit = 'INCHES';
                $product->length_inches = (double) request('length');
                $product->height_inches = (double) request('height');
                $product->width_inches = (double) request('width');
                $product->thickness_inches = (double) request('thickness');
                $product->update();

            }

        
            Session::flash('message', 'Successfully updated angle!');
            return Redirect::to('angles');
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
