<?php

namespace App\Http\Controllers;

use App\Contenu;
use Illuminate\Http\Request;

class ContenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contenu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function show(Contenu $contenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Contenu $contenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contenu $contenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contenu $contenu)
    {
        //
    }
}
