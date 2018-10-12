<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Price
 *
 * @property int $id
 * @property int $product_id
 * @property float $price
 * @property string $currency
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Price onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Price whereUpdatedBy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Price withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Price withoutTrashed()
 * @mixin \Eloquent
 */
class Price extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'price',
        'currency',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
