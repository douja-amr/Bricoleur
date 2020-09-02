<?php

namespace App\Http\Controllers;

use App\Bricoleur;
use App\User;
use App\Ville;
use App\Secteur;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


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
      $villes = Ville::all();
      $sectors = Secteur::all();
      $usrs = User::all();

      return view('/bricoleur.index',['bricoleur'=>$bricol, 'villes' => $villes, 'secteurs' => $sectors, 'users' => $usrs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $villes = Ville::all();
      $bricol = Bricoleur::all();
      $usrs = User::all();
      $sectors = Secteur::all();
      return view('bricoleur.create',['users' => $usrs , 'villes' => $villes , 'bricoleurs' => $bricol , 'secteurs' => $sectors]);

        // return view('bricoleur/create');
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
                // $bricoleur->image = $prmt['image'];
                $bricoleur->ville_id = $prmt['ville_id'];
                $bricoleur->secteur_id = $prmt['secteur_id'];
                $bricoleur->user_id = $prmt['user_id'];
                $bricoleur->approuver = $prmt['approuver'];
                if($request->hasFile('image')){
                    $fileName = time().'_'.$request->file('image')->getClientOriginalName();
                    $path = $request->file('image')->storeAs('uploads',$fileName,'public');
                    $bricoleur->image= '/storage/' .$path;
                    }
                $bricoleur->save();
                return redirect('/bricoleur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function show(Bricoleur $bricoleur)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $bricol = Bricoleur::find($id);
       $sectors = Secteur::all();
       $usrs = User::all();
       $villes = Ville::all();
       return view('bricoleur.edit',  compact('bricol','villes','sectors','usrs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $bricol =Bricoleur::find($id);
      $bricol->nom = $request->input('nom');
      $bricol->prenom = $request->input('prenom');
      $bricol->email = $request->input('email');
      $bricol->ville_id = $request->input('ville_id');
      $bricol->secteur_id = $request->input('secteur_id');
      $bricol->user_id = $request->input('user_id');
      $bricol->telephone = $request->input('telephone');
      $bricol->CIN = $request->input('CIN');
      $bricol->email = $request->input('email');
      $bricol->approuver = $request->input('approuver');
     if($request->hasFile('image')){
          $path = $request->file('image')->store('bricolers');
          $bricol->image=$path;
      }
      $bricol->save();
      return redirect('bricoleur')->with('success','Bricoler update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bricoleur  $bricoleur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bricol = Bricoleur::find($id)->delete();
      return redirect('bricoleur')->with('success','Bricoler deleted successfully');
    }
}
