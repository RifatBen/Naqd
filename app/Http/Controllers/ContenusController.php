<?php

namespace App\Http\Controllers;

use App\Contenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class ContenusController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $contenus = Contenu::latest()
            ->filter(request(['region', 'categorie']))
            ->get();
        
        return view('contenu.index',compact('contenus'));
    }

    public function search(Request $request){
        $contenus = Contenu::latest()
            ->where('nom', 'like', '%'.request('recherche').'%')
            ->get();

        return view('contenu.index',compact('contenus'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'nom' => 'required',
            'region' => 'required',
            'categorie' => 'required',
            'fichier' => 'required|file'
        ]);

        $file = $request->file('fichier');


        $filename=$file->store('contenu/'. $request->region.'/'.$request->categorie );

        Contenu::create([
            'nom' => request('nom'),
            'region' => request('region'),
            'categorie' => request('categorie'),
            'link' => $filename
        ]);

        Session::flash('Success', 'Contenu ajouté avec succès');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contenu  $contenu
     * @return \Illuminate\Http\Response
     */
    public function show(Contenu $contenu)
    {
        
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
        Storage::delete($contenu->link);
        $contenu->delete();
        Session::flash('Success', 'Contenu supprimé avec succès');
        return back();
    }


    public function getDownload(Contenu $contenu)
    {
        //PDF file is stored under project/public/download/info.pdf
        $downloadpath = public_path() . '/download/' . $contenu->link;

        return Response::download($downloadpath);
    }
}
