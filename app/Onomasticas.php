<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Onomasticas
 *
 * @property string|null $jv
 * @property string|null $CodJV
 * @property string|null $NombreJV
 * @property int|null $codger
 * @property string|null $equipe_code
 * @property string|null $NombreGA
 * @property int $id
 * @property string|null $ApellidosRep
 * @property string|null $NombreRep
 * @property string|null $Codigo_Linea
 * @property string|null $Linea
 * @property string|null $Equipo
 * @property string|null $mail
 * @property string|null $DNI
 * @property string|null $F_Alta
 * @property string|null $F_Nac
 * @property int|null $Movil
 * @property string|null $Abrev
 * @property string|null $Direccion
 * @property string|null $Poblacion
 * @property string|null $CP
 * @property string|null $Provincia
 * @property int|null $AÑOSEMP
 * @property int|null $EDAD
 * @property string|null $CUMP
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereAbrev($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereApellidosRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereAÑOSEMP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereCP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereCUMP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereCodJV($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereCodger($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereCodigoLinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereDNI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereEDAD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereEquipeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereFAlta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereFNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereJv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereLinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereMovil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereNombreGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereNombreJV($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereNombreRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas wherePoblacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Onomasticas whereProvincia($value)
 * @mixin \Eloquent
 */
class Onomasticas extends Model
{
    protected $table='onomasticasjv';
}
