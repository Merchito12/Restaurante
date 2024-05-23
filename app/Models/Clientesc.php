<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientesc extends Model
{
    use HasFactory;
    protected $table="clientesc";
    protected $fillable=["nombre","email","password","token_rembered","telefono","direccion"];

    
}
