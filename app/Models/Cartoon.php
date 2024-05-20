<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 *
 * @property $id
 * @property $name
 * @property $packing_type
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cartoon extends Model
{
    use HasFactory;

    protected $table = 'pcs_per_cartons';
    static $rules = [
        'name' => 'required',
        'pcs_per_cartoon' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'pcs_per_cartoon'];

}
