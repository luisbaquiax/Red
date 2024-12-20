<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    //
    protected $table = 'publicacion';

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_publicacion');
    }
}
