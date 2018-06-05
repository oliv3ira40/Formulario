<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class doencaCronicaOption
 * @package App\Models
 * @version June 5, 2018, 8:50 pm UTC
 *
 * @property string value
 */
class doencaCronicaOption extends Model
{
    use SoftDeletes;

    public $table = 'doenca_cronica_options';
    

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
