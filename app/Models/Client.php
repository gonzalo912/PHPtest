<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //set to false to avoid created_at and updated_at column fill.
    public $timestamps = false;

    use HasFactory;
}
