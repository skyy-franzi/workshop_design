<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $user_id
 * @property $offer_date
 * @property $title
 * @property $description
 * @property $street
 * @property $city
 * @property $zip
 * @property $lat
 * @property $lng
 * @property $views_count
 * @property $expiration_time
 * @method static orderBy(string $column, string $sort)
 * @method static find($id)
 */

class Offer extends Model
{
    protected $table = 'offer';


}
