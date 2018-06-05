<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tipoDaDeficienciaOption
 * @package App\Models
 * @version June 5, 2018, 8:49 pm UTC
 *
 * @property string value
 */
class tipoDaDeficienciaOption extends Model
{
    use SoftDeletes;

    public $table = 'tipo_da_deficiencia_options';
    

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
