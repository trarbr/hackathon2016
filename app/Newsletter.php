<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletter';

    protected $fillable =  ['email', 'street', 'zipcode', 'mobile', 'notification_type', 'active', 'created_at', 'updated_at'];
}
