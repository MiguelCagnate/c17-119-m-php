<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected  $fillable = [
        'role'
    ];

    //para establecer la relacion con usuario
    public  function users() {
       return $this->hasMany(User::class);
    }
}
