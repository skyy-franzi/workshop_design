<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $username
 * @property $firstname
 * @property $lastname
 * @property $email
 * @property $password
 * @method static where(string $string, string $username)
 */
class User extends Model
{
    protected $table = 'user';

}
