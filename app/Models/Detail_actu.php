<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_actu extends Model
{
    protected $fillable = ['image', 'titre', 'date', 'contenu'];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }
    use HasFactory;
}
