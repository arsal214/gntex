<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    use HasFactory;

    static $rules = [
        'po_id' => 'required',
        'color_id' => 'required',
        'size_id' => 'required',
        'supplier_id' => 'required',
        'packing_id' => 'required',
        'pcs_per_carton_id' => 'required',
        'category_id' => 'required',
        'product_construction_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */


    protected $fillable = ['po_id',
        'color_id',
        'size_id',
        'supplier_id',
        'packing_id',
        'pcs_per_carton_id',
        'category_id',
        'product_construction_id',
        'product_descriptions',
        'no_cartoon',
        'marking'
    ];


}


