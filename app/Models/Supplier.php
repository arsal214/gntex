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
class Supplier extends Model
{

    static $rules = [
        'po_id' => 'required|unique:suppliers,po_id',
        'name' => 'required',
        'company_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'po_id',
        'name',
        'email',
        'company_name',
        'phone_number'
    ];


}

