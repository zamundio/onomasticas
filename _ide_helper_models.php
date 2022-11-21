<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Onomasticas extends \Eloquent {}
}

namespace App{
/**
 * App\OnomasticasNextYear
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
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear query()
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereAbrev($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereApellidosRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereAÑOSEMP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereCP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereCUMP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereCodJV($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereCodger($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereCodigoLinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereDNI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereEDAD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereEquipeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereEquipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereFAlta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereFNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereJv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereLinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereMovil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereNombreGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereNombreJV($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereNombreRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear wherePoblacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OnomasticasNextYear whereProvincia($value)
 */
	class OnomasticasNextYear extends \Eloquent {}
}

namespace App{
/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[] $abilities
 * @property-read int|null $abilities_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\añosemp
 *
 * @property int $Id
 * @property string|null $Años
 * @method static \Illuminate\Database\Eloquent\Builder|añosemp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|añosemp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|añosemp query()
 * @method static \Illuminate\Database\Eloquent\Builder|añosemp whereAños($value)
 * @method static \Illuminate\Database\Eloquent\Builder|añosemp whereId($value)
 * @mixin \Eloquent
 */
	class añosemp extends \Eloquent {}
}

namespace App{
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
 * @property string|null $Primer Apellido
 */
	class jv extends \Eloquent {}
}

namespace App{
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
	class lineas extends \Eloquent {}
}

namespace App{
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
	class meses extends \Eloquent {}
}

