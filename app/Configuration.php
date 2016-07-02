<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'name', 'value'
     ];

     public $timestamps = false;

     /**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @param  array  $attributes
     * @param  object $value
     * @return static
     */
    public static function updateOrCreate(array $attributes, $value)
    {
        $instance = static::firstOrNew($attributes);

        $instance->value = $value;
        $instance->save();

        return $instance;
    }
 }
