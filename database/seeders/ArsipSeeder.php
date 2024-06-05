<?php

namespace Database\Seeders;

use App\Models\Arsip;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArsipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'no_arsip'          => '001/2019',
                'no_surat'          => '123/A/2019',
                'tanggal_surat'     => '2019-01-15',
                'perihal'           => 'Surat Keputusan',
                'disposisi_id'      => 1,
                'file'              => 'surat_keputusan_2019_01.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '002/2019',
                'no_surat'          => '124/B/2019',
                'tanggal_surat'     => '2019-02-20',
                'perihal'           => 'Undangan Rapat',
                'disposisi_id'      => 2,
                'file'              => 'undangan_rapat_2019_02.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '003/2019',
                'no_surat'          => '125/C/2019',
                'tanggal_surat'     => '2019-03-10',
                'perihal'           => 'Laporan Bulanan',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_2019_03.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '004/2019',
                'no_surat'          => '126/D/2019',
                'tanggal_surat'     => '2019-04-05',
                'perihal'           => 'Pengumuman',
                'disposisi_id'      => 4,
                'file'              => 'pengumuman_2019_04.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '005/2019',
                'no_surat'          => '127/E/2019',
                'tanggal_surat'     => '2019-05-25',
                'perihal'           => 'Permohonan Cuti',
                'disposisi_id'      => 5,
                'file'              => 'permohonan_cuti_2019_05.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '001/2016',
                'no_surat'          => '101/A/2016',
                'tanggal_surat'     => '2016-01-10',
                'perihal'           => 'Undangan Rapat Koordinasi',
                'disposisi_id'      => 1,
                'file'              => 'undangan_rapat_koordinasi_2016_01.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '002/2016',
                'no_surat'          => '102/B/2016',
                'tanggal_surat'     => '2016-02-15',
                'perihal'           => 'Surat Keputusan',
                'disposisi_id'      => 2,
                'file'              => 'surat_keputusan_2016_02.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '003/2016',
                'no_surat'          => '103/C/2016',
                'tanggal_surat'     => '2016-03-20',
                'perihal'           => 'Laporan Kegiatan',
                'disposisi_id'      => 3,
                'file'              => 'laporan_kegiatan_2016_03.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '004/2016',
                'no_surat'          => '104/D/2016',
                'tanggal_surat'     => '2016-04-25',
                'perihal'           => 'Memo Internal',
                'disposisi_id'      => 4,
                'file'              => 'memo_internal_2016_04.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '005/2016',
                'no_surat'          => '105/E/2016',
                'tanggal_surat'     => '2016-05-30',
                'perihal'           => 'Notulen Rapat',
                'disposisi_id'      => 5,
                'file'              => 'notulen_rapat_2016_05.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '006/2016',
                'no_surat'          => '106/F/2016',
                'tanggal_surat'     => '2016-06-05',
                'perihal'           => 'Surat Edaran',
                'disposisi_id'      => 6,
                'file'              => 'surat_edaran_2016_06.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '007/2016',
                'no_surat'          => '107/G/2016',
                'tanggal_surat'     => '2016-07-10',
                'perihal'           => 'Permohonan Izin',
                'disposisi_id'      => 1,
                'file'              => 'permohonan_izin_2016_07.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '008/2016',
                'no_surat'          => '108/H/2016',
                'tanggal_surat'     => '2016-08-15',
                'perihal'           => 'Laporan Bulanan',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_2016_08.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '009/2016',
                'no_surat'          => '109/I/2016',
                'tanggal_surat'     => '2016-09-20',
                'perihal'           => 'Surat Peringatan',
                'disposisi_id'      => 3,
                'file'              => 'surat_peringatan_2016_09.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '010/2016',
                'no_surat'          => '110/J/2016',
                'tanggal_surat'     => '2016-10-25',
                'perihal'           => 'Pengumuman Kegiatan',
                'disposisi_id'      => 4,
                'file'              => 'pengumuman_kegiatan_2016_10.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '011/2016',
                'no_surat'          => '111/K/2016',
                'tanggal_surat'     => '2016-11-30',
                'perihal'           => 'Permohonan Data',
                'disposisi_id'      => 5,
                'file'              => 'permohonan_data_2016_11.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '012/2016',
                'no_surat'          => '112/L/2016',
                'tanggal_surat'     => '2016-12-05',
                'perihal'           => 'Pemberitahuan Cuti',
                'disposisi_id'      => 6,
                'file'              => 'pemberitahuan_cuti_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '013/2016',
                'no_surat'          => '113/M/2016',
                'tanggal_surat'     => '2016-12-10',
                'perihal'           => 'Surat Tugas',
                'disposisi_id'      => 1,
                'file'              => 'surat_tugas_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '014/2016',
                'no_surat'          => '114/N/2016',
                'tanggal_surat'     => '2016-12-15',
                'perihal'           => 'Evaluasi Proyek',
                'disposisi_id'      => 2,
                'file'              => 'evaluasi_proyek_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '015/2016',
                'no_surat'          => '115/O/2016',
                'tanggal_surat'     => '2016-12-20',
                'perihal'           => 'Laporan Akhir Tahun',
                'disposisi_id'      => 3,
                'file'              => 'laporan_akhir_tahun_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '001/2016',
                'no_surat'          => '101/A/2016',
                'tanggal_surat'     => '2016-01-10',
                'perihal'           => 'Undangan Rapat Koordinasi',
                'disposisi_id'      => 1,
                'file'              => 'undangan_rapat_koordinasi_2016_01.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '002/2016',
                'no_surat'          => '102/B/2016',
                'tanggal_surat'     => '2016-02-15',
                'perihal'           => 'Surat Keputusan',
                'disposisi_id'      => 2,
                'file'              => 'surat_keputusan_2016_02.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '003/2016',
                'no_surat'          => '103/C/2016',
                'tanggal_surat'     => '2016-03-20',
                'perihal'           => 'Laporan Kegiatan',
                'disposisi_id'      => 3,
                'file'              => 'laporan_kegiatan_2016_03.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '004/2016',
                'no_surat'          => '104/D/2016',
                'tanggal_surat'     => '2016-04-25',
                'perihal'           => 'Memo Internal',
                'disposisi_id'      => 4,
                'file'              => 'memo_internal_2016_04.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '005/2016',
                'no_surat'          => '105/E/2016',
                'tanggal_surat'     => '2016-05-30',
                'perihal'           => 'Notulen Rapat',
                'disposisi_id'      => 5,
                'file'              => 'notulen_rapat_2016_05.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '006/2016',
                'no_surat'          => '106/F/2016',
                'tanggal_surat'     => '2016-06-05',
                'perihal'           => 'Surat Edaran',
                'disposisi_id'      => 6,
                'file'              => 'surat_edaran_2016_06.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '007/2016',
                'no_surat'          => '107/G/2016',
                'tanggal_surat'     => '2016-07-10',
                'perihal'           => 'Permohonan Izin',
                'disposisi_id'      => 1,
                'file'              => 'permohonan_izin_2016_07.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '008/2016',
                'no_surat'          => '108/H/2016',
                'tanggal_surat'     => '2016-08-15',
                'perihal'           => 'Laporan Bulanan',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_2016_08.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '009/2016',
                'no_surat'          => '109/I/2016',
                'tanggal_surat'     => '2016-09-20',
                'perihal'           => 'Surat Peringatan',
                'disposisi_id'      => 3,
                'file'              => 'surat_peringatan_2016_09.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '010/2016',
                'no_surat'          => '110/J/2016',
                'tanggal_surat'     => '2016-10-25',
                'perihal'           => 'Pengumuman Kegiatan',
                'disposisi_id'      => 4,
                'file'              => 'pengumuman_kegiatan_2016_10.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '011/2016',
                'no_surat'          => '111/K/2016',
                'tanggal_surat'     => '2016-11-30',
                'perihal'           => 'Permohonan Data',
                'disposisi_id'      => 5,
                'file'              => 'permohonan_data_2016_11.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '012/2016',
                'no_surat'          => '112/L/2016',
                'tanggal_surat'     => '2016-12-05',
                'perihal'           => 'Pemberitahuan Cuti',
                'disposisi_id'      => 6,
                'file'              => 'pemberitahuan_cuti_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '013/2016',
                'no_surat'          => '113/M/2016',
                'tanggal_surat'     => '2016-12-10',
                'perihal'           => 'Surat Tugas',
                'disposisi_id'      => 1,
                'file'              => 'surat_tugas_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '014/2016',
                'no_surat'          => '114/N/2016',
                'tanggal_surat'     => '2016-12-15',
                'perihal'           => 'Evaluasi Proyek',
                'disposisi_id'      => 2,
                'file'              => 'evaluasi_proyek_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '015/2016',
                'no_surat'          => '115/O/2016',
                'tanggal_surat'     => '2016-12-20',
                'perihal'           => 'Laporan Akhir Tahun',
                'disposisi_id'      => 3,
                'file'              => 'laporan_akhir_tahun_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '001/2016',
                'no_surat'          => '101/A/2016',
                'tanggal_surat'     => '2016-01-10',
                'perihal'           => 'Undangan Rapat Koordinasi',
                'disposisi_id'      => 1,
                'file'              => 'undangan_rapat_koordinasi_2016_01.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '002/2016',
                'no_surat'          => '102/B/2016',
                'tanggal_surat'     => '2016-02-15',
                'perihal'           => 'Surat Keputusan',
                'disposisi_id'      => 2,
                'file'              => 'surat_keputusan_2016_02.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '003/2016',
                'no_surat'          => '103/C/2016',
                'tanggal_surat'     => '2016-03-20',
                'perihal'           => 'Laporan Kegiatan',
                'disposisi_id'      => 3,
                'file'              => 'laporan_kegiatan_2016_03.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '004/2016',
                'no_surat'          => '104/D/2016',
                'tanggal_surat'     => '2016-04-25',
                'perihal'           => 'Memo Internal',
                'disposisi_id'      => 4,
                'file'              => 'memo_internal_2016_04.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '005/2016',
                'no_surat'          => '105/E/2016',
                'tanggal_surat'     => '2016-05-30',
                'perihal'           => 'Notulen Rapat',
                'disposisi_id'      => 5,
                'file'              => 'notulen_rapat_2016_05.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '006/2016',
                'no_surat'          => '106/F/2016',
                'tanggal_surat'     => '2016-06-05',
                'perihal'           => 'Surat Edaran',
                'disposisi_id'      => 6,
                'file'              => 'surat_edaran_2016_06.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '007/2016',
                'no_surat'          => '107/G/2016',
                'tanggal_surat'     => '2016-07-10',
                'perihal'           => 'Permohonan Izin',
                'disposisi_id'      => 1,
                'file'              => 'permohonan_izin_2016_07.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '008/2016',
                'no_surat'          => '108/H/2016',
                'tanggal_surat'     => '2016-08-15',
                'perihal'           => 'Laporan Bulanan',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_2016_08.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '009/2016',
                'no_surat'          => '109/I/2016',
                'tanggal_surat'     => '2016-09-20',
                'perihal'           => 'Surat Peringatan',
                'disposisi_id'      => 3,
                'file'              => 'surat_peringatan_2016_09.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '010/2016',
                'no_surat'          => '110/J/2016',
                'tanggal_surat'     => '2016-10-25',
                'perihal'           => 'Pengumuman Kegiatan',
                'disposisi_id'      => 4,
                'file'              => 'pengumuman_kegiatan_2016_10.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '011/2016',
                'no_surat'          => '111/K/2016',
                'tanggal_surat'     => '2016-11-30',
                'perihal'           => 'Permohonan Data',
                'disposisi_id'      => 5,
                'file'              => 'permohonan_data_2016_11.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '012/2016',
                'no_surat'          => '112/L/2016',
                'tanggal_surat'     => '2016-12-05',
                'perihal'           => 'Pemberitahuan Cuti',
                'disposisi_id'      => 6,
                'file'              => 'pemberitahuan_cuti_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '013/2016',
                'no_surat'          => '113/M/2016',
                'tanggal_surat'     => '2016-12-10',
                'perihal'           => 'Surat Tugas',
                'disposisi_id'      => 1,
                'file'              => 'surat_tugas_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '014/2016',
                'no_surat'          => '114/N/2016',
                'tanggal_surat'     => '2016-12-15',
                'perihal'           => 'Evaluasi Proyek',
                'disposisi_id'      => 2,
                'file'              => 'evaluasi_proyek_2016_12.pdf',
                'tahun'             => '2016'
            ],
            [
                'no_arsip'          => '015/2016',
                'no_surat'          => '115/O/2016',
                'tanggal_surat'     => '2016-12-20',
                'perihal'           => 'Laporan Akhir Tahun',
                'disposisi_id'      => 3,
                'file'              => 'laporan_akhir_tahun_2016_12.pdf',
                'tahun'             => '2016'
            ]
        ])->each(function ($item) {
            Arsip::create($item);
        });

    }
}
