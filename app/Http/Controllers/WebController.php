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
        return view('forms.webs.index', [ 'webs' => Web::where('girder_id', session('girder'))->orderBy('web_id', 'DESC')->get()]);
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

        if(request('preffered_unit') == "1" || request('preffered_unit') == "2"){

            $product = new Web();
            $product->girder_id = session('girder');

            if (request('preffered_unit') == "1"){
                $product->preffered_unit = 'MM';

                $product->length_mm = (int) request('length');
                $product->height_mm = (int) request('height');
                $product->width_mm = (int) request('width');
                $product->thickness_mm = (int) request('thickness');

            } else if (request('preffered_unit') == "2"){
                $product->preffered_unit = 'INCHES';

                $product->length_inches = (double) request('length');
                $product->height_inches = (double) request('height');
                $product->width_inches = (double) request('width');
                $product->thickness_inches = (double) request('thickness');
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
        if(request('preffered_unit') == "1" || request('preffered_unit') == "2"){

            $product = Web::findOrFail($web);
            $product->girder_id = session('girder');

            if (request('preffered_unit') == "1"){
                $product->preffered_unit = 'MM';

                $product->length_mm = (int) request('length');
                $product->height_mm = (int) request('height');
                $product->width_mm = (int) request('width');
                $product->thickness_mm = (int) request('thickness');

            } else if (request('preffered_unit') == "2"){
                $product->preffered_unit = 'INCHES';

                $product->length_inches = (double) request('length');
                $product->height_inches = (double) request('height');
                $product->width_inches = (double) request('width');
                $product->thickness_inches = (double) request('thickness');
            }
            $product->update();
            Session::flash('message', 'Successfully updated web!');

        }
        return Redirect::to('webs');
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
