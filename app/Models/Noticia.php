<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticia
 *
 * @property $id
 * @property $Categoria_Noticia
 * @property $Nombre_Noticia
 * @property $Lugar_Noticia
 * @property $Fecha_Noticia
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Noticia extends Model
{
    
    static $rules = [
		'Categoria_Noticia' => 'required',
		'Nombre_Noticia' => 'required',
		'Lugar_Noticia' => 'required',
		'Fecha_Noticia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Categoria_Noticia','Nombre_Noticia','Lugar_Noticia','Fecha_Noticia'];



}
