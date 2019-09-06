<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu"; //Este valor es porque las convenciones de laravel dicen que la tabla debe terminar en plural. Se asigna este valor con el nombre de la tabla real para que laravel sepa que el nombre es menu y no menus 
    protected $fillable = ['nombre','url','icono']; //Da seguridad al proyecto, ya que laravel solo deja que estos campos sean insertados en forma masiva
    protected $guarded = ['id']; //
    //public $timestamps = ""; //Esta linea no hace falta ya que la tabla si tien los campos timestamps fechas de update e insercion
}
