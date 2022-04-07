<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress',
        'number',
        'id'
    ];
    
    public function products(Type $var = null)
    {
       return $this->hasMany(Product::class,'id_loja','id');
    }


}
