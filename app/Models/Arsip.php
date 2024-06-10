<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arsip extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'arsip';

    protected $fillable = [
        'no_arsip',
        'no_surat',
        'tanggal_surat',
        'perihal',
        'disposisi_id',
        'file',
        'tahun'
    ];

    public function scopeSearchNoArsip (Builder $query, string $search): void
    {
        $query->where('no_surat', intval($search));
    }

     /**
     * Get the disposisi that owns the Arsip
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function disposisi(): BelongsTo
    {
        return $this->belongsTo(disposisi::class);
    }
}
