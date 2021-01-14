<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoveod extends Model
{
    protected $fillable = ['algus', 'otspunkt', 'user_id', 'aeg', 'valmis', 'juht', 'nr'];
}
