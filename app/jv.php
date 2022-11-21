<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\jv
 *
 * @property string $Codigo
 * @property string|null $Primer Apellido
 * @method static \Illuminate\Database\Eloquent\Builder|jv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|jv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|jv query()
 * @method static \Illuminate\Database\Eloquent\Builder|jv whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|jv wherePrimerApellido($value)
 * @mixin \Eloquent
 */
class jv extends Model
{
    protected $table = 'jv';
}
