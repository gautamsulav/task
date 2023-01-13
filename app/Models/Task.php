<?php

namespace App\Models;

use App\Traits\ExternalId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, ExternalId;

    protected $fillable = [
      'name',
      'url',
      'timezone',
    ];

    protected $casts = [
        'due_date' => 'date'
    ];
}
