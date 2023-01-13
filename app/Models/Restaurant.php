<?php

namespace App\Models;

use App\Traits\ExternalId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Restaurant extends Model
{
    use HasFactory, ExternalId;

    protected $fillable = [
        'name',
        'timezone',
        'url',
    ];
}
