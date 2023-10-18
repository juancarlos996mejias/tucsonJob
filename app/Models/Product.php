<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $codigo
 * @property $articulo
 * @property $lote
 * @property $marca
 * @property $stock total
 * @property $talar
 * @property $outlet
 * @property $quilmes
 * @property $preparacion
 * @property $ciclico
 * @property $marmoleria deposito
 * @property $marmoleria fabrica
 * @property $ext mepano
 * @property $parq ind pilar
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'articulo' => 'required',
		'lote' => 'required',
		'marca' => 'required',
		'stock total' => 'required',
		'talar' => 'required',
		'outlet' => 'required',
		'quilmes' => 'required',
		'preparacion' => 'required',
		'ciclico' => 'required',
		'marmoleria deposito' => 'required',
		'marmoleria fabrica' => 'required',
		'ext mepano' => 'required',
		'parq ind pilar' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','articulo','lote','marca','stock total','talar','outlet','quilmes','preparacion','ciclico','marmoleria deposito','marmoleria fabrica','ext mepano','parq ind pilar'];



}
