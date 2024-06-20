<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait FormatCreatedUpdated
{
    public function createdAt (): Attribute
    {
        return new Attribute(
            get: function () {
                $created_at = $this->attributes['created_at'];
                return Carbon::parse($created_at)->locale('id')->translatedFormat('d F Y');
            }
        );
    }

    public function updatedAt(): Attribute
    {
        return new Attribute(
            get: function () {
                $updated_at = $this->attributes['updated_at'];
                return Carbon::parse($updated_at)->locale('id')->translatedFormat('d F Y');
            }
        );
    }
}
