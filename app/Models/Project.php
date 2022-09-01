<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'url', 'description'];

   // Deshabilitar la proteccion para la asignación masiva
    protected $guarded = []; // Podemos deshabilitar la protección de Laravel, siempre y cuando no enviemos Model::create(request()->all());

    public function getRouteKeyName()
    {
        return 'url';
    }
}
