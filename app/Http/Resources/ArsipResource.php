<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArsipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'no_arsip' => $this->no_arsip,
            'no_surat' => $this->no_surat,
            'tanggal_surat' => $this->tanggal_surat,
            'perihal' => $this->perihal,
            'nama_disposisi' => $this->disposisi ? $this->disposisi->nama_disposisi : null,
            'tahun' => $this->tahun,
            'deleted_at' => $this->deleted_at ? 'Dihapus' : 'Belum Dihapus',
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
