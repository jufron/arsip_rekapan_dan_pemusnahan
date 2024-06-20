<?php

namespace App\Models;

use Carbon\Carbon;
use App\Traits\FormatCreatedUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Arsip extends Model
{
    use HasFactory;
    use SoftDeletes;
    use FormatCreatedUpdated;

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

    public function formatTanggalSurat(): Attribute
    {
        return new Attribute(
            get: function () {
                $tanggal_surat = $this->attributes['tanggal_surat'];
                return Carbon::parse($tanggal_surat)->locale('id')->translatedFormat('d F Y');
            }
        );
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
