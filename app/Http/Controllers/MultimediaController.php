<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    public function index()
    {
        $multimedias = Multimedia::all();
        return view('multimedia.index', compact('multimedias'));
    }

    /**
     * Show the form for creating a new resource.
     *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('multimedia.create');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $multimedia = new Multimedia();
        $multimedia->nombre = $request->input('personaNombre');
        $multimedia->archivo = $request->input('archivo');
        if($multimedia->save()){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        return redirect()->back()->with('failed', 'Could not saved!');
    }


}
