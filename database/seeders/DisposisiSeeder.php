<?php

namespace Database\Seeders;

use App\Models\Disposisi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DisposisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['nama_disposisi' => 'kepala seksi'],
            ['nama_disposisi' => 'sekertaris'],
            ['nama_disposisi' => 'kepala bagian'],
            ['nama_disposisi' => 'direktur'],
            ['nama_disposisi' => 'bendahara'],
            ['nama_disposisi' => 'kepala bagian']
        ])->each(function ($item) {
            Disposisi::create($item);
        });
    }
}
