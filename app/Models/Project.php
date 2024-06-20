<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    /* Atributos por defecto a un campo
     * protected $attributes = [
        'name' => 'hola',
    ];
    */


}
