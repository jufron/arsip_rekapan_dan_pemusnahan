<?php

namespace App\Models;

use App\Traits\FormatCreatedUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disposisi extends Model
{
    use HasFactory, FormatCreatedUpdated;

    protected $table = 'disposisi';

    protected $fillable = [
        'nama_disposisi'
    ];

    /**
     * Get all of the arsip for the Disposisi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function arsip(): HasMany
    {
        return $this->hasMany(arsip::class);
    }
}
