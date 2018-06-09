<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  public $timestamps = false;
protected $table ="employees";
protected $fillable = [
  'id',  'nombre', 'email', 'puesto','fecha_de_nacimiento', 'domicilio', 'skill'
];
public function scopeSearch($query)
{

   return $query ;




}
}
