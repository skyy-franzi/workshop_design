<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $offer_id
 * @property $recipient_user_id
 * @property $sender_user_id
 * @property $message
 * @property $read
 * @method static where(string $string, string $username)
 */
class Chat extends Model
{
    protected $table = 'chat';

}
