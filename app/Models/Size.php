<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    /**
     * Class Language
     *
     * @property $id
     * @property $name
     * @property $qty
     * @property $created_at
     * @property $updated_at
     *
     * @package App
     * @mixin \Illuminate\Database\Eloquent\Builder
     */
class Size extends Model
{

    static $rules = [
        'name' => 'required',
        'qty' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','qty'];


}
