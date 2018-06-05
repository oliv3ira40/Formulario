<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UfOption
 * @package App\Models
 * @version June 5, 2018, 8:43 pm UTC
 *
 * @property string value
 */
class UfOption extends Model
{
    use SoftDeletes;

    public $table = 'uf_options';
    

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
