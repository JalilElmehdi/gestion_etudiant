<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $primaryKey='id_filiere';
    use HasFactory;
    protected $fillable=['libelle'];
}
