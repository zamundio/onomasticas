<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\lineas
 *
 * @property string|null $Codigo
 * @property string|null $Linea
 * @method static \Illuminate\Database\Eloquent\Builder|lineas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lineas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|lineas query()
 * @method static \Illuminate\Database\Eloquent\Builder|lineas whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|lineas whereLinea($value)
 * @mixin \Eloquent
 */
class lineas extends Model
{
    protected $table = 'lineas';
}
