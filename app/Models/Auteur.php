<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $fillable = ['nom', 'prenom'];

    public function detail_actus()
    {
        return $this->hasMany(Detail_actu::class);
    }
    use HasFactory;
}
