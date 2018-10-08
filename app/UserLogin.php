<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserLogin
 *
 * @property int $user_id
 * @property string $ip
 * @property string $login_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserLogin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserLogin whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserLogin whereLoginType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserLogin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserLogin whereUserId($value)
 * @mixin \Eloquent
 */
class UserLogin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_logins';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'ip', 'login_type'
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
