<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['show_name', 'genre', 'imdb_rating', 'lead_actor'];
}
