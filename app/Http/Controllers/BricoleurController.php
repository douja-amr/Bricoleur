<?php

namespace App\Http\Controllers;

use App\Bricoleur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BricoleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bricol = Bricoleur::all();
      return view('/bricoleur.index',['bricoleur'=>$bricol]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $val = DB::table('villes')->select('ville_id')->join('bricoleurs','villes.id','bricoleurs.ville_id')->get();
      // $data = DB::table('villes')->select('nom_ville')->join('bricoleurs','villes.id','bricoleurs.ville_id')->get();


        return view('bricoleur/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $bricol = DB::table('bricoleur')
                ->join('villes', 'bricoleurs.ville_id', '=', 'villes.id')
                ->join('secteurs', 'bricoleurs.secteur_id', '=', 'secteurs.id')
                ->join('users', 'bricoleurs.user_id', '=', 'users.id')
                ->select('users.name','users.email', 'villes.nom_ville', 'secteurs.nom_secteur')
                ->get();

                $prmt = $request->except(['_token']);
                $bricoleur = new Bricoleur();
                $bricoleur->ville_id = $prmt['ville_id'];
                $bricoleur->secteur_id = $prmt['secteur_id'];
                $bricoleur->user_id = $prmt['user_id'];
                $bricoleur->save();
                return redirect('/bricoleur', compact('bricoleur', 'bricol'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function show(Bricoleur $bricoleur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function edit(Bricoleur $bricoleur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bricoleur $bricoleur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bricoleur $bricoleur)
    {
        //
    }
}
