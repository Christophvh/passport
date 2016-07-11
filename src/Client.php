<?php

namespace Laravel\Passport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_clients';

    /**
     * The guarded attributes on the model.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'secret',
    ];

    /**
     * Get all of the authentication codes for the client.
     */
    public function authCodes()
    {
        return $this->hasMany(AuthCode::class);
    }

    /**
     * Get all of the tokens that belong to the client.
     */
    public function tokens()
    {
        return $this->hasMany(Token::class);
    }
}