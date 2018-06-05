<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class comQuemResideOption
 * @package App\Models
 * @version June 5, 2018, 8:48 pm UTC
 *
 * @property string value
 */
class comQuemResideOption extends Model
{
    use SoftDeletes;

    public $table = 'com_quem_reside_options';
    

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
