<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function estructuras()
    {
        return $this->belongsTo(Estructura::class, 'estructura_id');
    }
    public function expertos()
    {
        return $this->belongsTo(Experto::class, 'experto_id');
    }

    //Relacion muchos a muchos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'podcast_curso');
    }

}p
