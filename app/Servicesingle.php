<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicesingle extends Model
{
    protected $table = "bricoleurs";
    protected $fillable = ['nom', 'prenom', 'telephone', 'CIN', 'email', 'image', 'ville_id', 'secteur_id', 'user_id', 'approuver' ];

}
