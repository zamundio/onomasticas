<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\meses
 *
 * @property string $Id
 * @property string|null $Mes
 * @method static \Illuminate\Database\Eloquent\Builder|meses newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|meses newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|meses query()
 * @method static \Illuminate\Database\Eloquent\Builder|meses whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|meses whereMes($value)
 * @mixin \Eloquent
 */
class meses extends Model
{
    protected $table = 'meses';
}

