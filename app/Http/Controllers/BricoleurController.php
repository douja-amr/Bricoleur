<?php

namespace App\Http\Controllers;

use App\Bricoleur;
use App\User;
use App\Ville;
use App\Secteur;
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
      // $brico=Bricoleur::find($id);
    //   $brico = DB::table('bricoleurs')
    //             ->join('villes', 'villes.id', '=', 'bricoleurs.ville_id')
    //             ->join('secteurs', 'secteurs.id', '=', 'bricoleurs.secteur_id')
    //             ->join('users', 'users.id', '=', 'bricoleurs.user_id')
    //             ->select('villes.*','secteurs.*','users.id','users.name','users.email')
    //             ->get();
    //     return view('bricoleur/create', compact('brico'));
        $villes = Ville::all();
        $bricol = Bricoleur::all();
        $usrs = User::all();
        $sectors = Secteur::all();
        return view('bricoleur.create',['users' => $usrs , 'villes' => $villes , 'bricoleurs' => $bricol , 'secteurs' => $sectors]);
     }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


                $prmt = $request->except(['_token']);
                $bricoleur = new Bricoleur();
                $bricoleur->nom = $prmt['nom'];
                $bricoleur->prenom = $prmt['prenom'];
                $bricoleur->telephone = $prmt['telephone'];
                $bricoleur->CIN = $prmt['CIN'];
                $bricoleur->email = $prmt['email'];
                $bricoleur->image = $prmt['image'];
                $bricoleur->ville_id = $prmt['ville_id'];
                $bricoleur->secteur_id = $prmt['secteur_id'];
                $bricoleur->user_id = $prmt['user_id'];
                $bricoleur->approuver = $prmt['approuver'];
                $bricoleur->save();
                return redirect('/bricoleur')->with('success', 'Add successfully');
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
    public function destroy($id)
    {
      $bricoleur = Bricoleur::find($id);
      $bricoleur->delete();
      return redirect('/bricoleur');
    }
}
