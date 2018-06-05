<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EstadoCivilOption
 * @package App\Models
 * @version June 5, 2018, 8:45 pm UTC
 *
 * @property string value
 */
class EstadoCivilOption extends Model
{
    use SoftDeletes;

    public $table = 'estado_civil_options';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
