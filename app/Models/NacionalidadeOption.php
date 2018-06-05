<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NacionalidadeOption
 * @package App\Models
 * @version June 5, 2018, 8:44 pm UTC
 *
 * @property string value
 */
class NacionalidadeOption extends Model
{
    use SoftDeletes;

    public $table = 'nacionalidade_options';
    

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
