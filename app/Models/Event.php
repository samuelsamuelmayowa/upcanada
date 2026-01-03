<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =   ['name','eventinfo','photo','organizer','end_date','start_date', 'hours'];
    //
}
