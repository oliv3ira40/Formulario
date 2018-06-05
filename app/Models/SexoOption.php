<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SexoOption
 * @package App\Models
 * @version June 5, 2018, 7:50 pm UTC
 *
 * @property string value
 */
class SexoOption extends Model
{
    use SoftDeletes;

    public $table = 'sexo_options';
    

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
