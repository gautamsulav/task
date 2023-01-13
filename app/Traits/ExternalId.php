<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ExternalId
{
    protected static function boot (): void
    {
        parent::boot();

        static::creating (function($model) {
            $model->external_id = (string) Str::uuid();
        });
    }
}
