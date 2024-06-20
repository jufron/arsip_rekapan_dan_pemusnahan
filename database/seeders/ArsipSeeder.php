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
            ],
            [
                'no_arsip'          => '001/2017',
                'no_surat'          => '101/O/2017',
                'tanggal_surat'     => '2017-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '002/2017',
                'no_surat'          => '102/O/2017',
                'tanggal_surat'     => '2017-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '003/2017',
                'no_surat'          => '103/O/2017',
                'tanggal_surat'     => '2017-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '004/2017',
                'no_surat'          => '104/O/2017',
                'tanggal_surat'     => '2017-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '005/2017',
                'no_surat'          => '105/O/2017',
                'tanggal_surat'     => '2017-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '006/2017',
                'no_surat'          => '106/O/2017',
                'tanggal_surat'     => '2017-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '007/2017',
                'no_surat'          => '107/O/2017',
                'tanggal_surat'     => '2017-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '008/2017',
                'no_surat'          => '108/O/2017',
                'tanggal_surat'     => '2017-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '009/2017',
                'no_surat'          => '109/O/2017',
                'tanggal_surat'     => '2017-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '010/2017',
                'no_surat'          => '110/O/2017',
                'tanggal_surat'     => '2017-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '011/2017',
                'no_surat'          => '111/O/2017',
                'tanggal_surat'     => '2017-11-10',
                'perihal'           => 'Laporan Bulanan November',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_november_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '012/2017',
                'no_surat'          => '112/O/2017',
                'tanggal_surat'     => '2017-12-20',
                'perihal'           => 'Laporan Bulanan Desember',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_desember_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '013/2017',
                'no_surat'          => '113/O/2017',
                'tanggal_surat'     => '2017-01-20',
                'perihal'           => 'Laporan Akhir Tahun',
                'disposisi_id'      => 1,
                'file'              => 'laporan_akhir_tahun_2017_01.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '014/2017',
                'no_surat'          => '114/O/2017',
                'tanggal_surat'     => '2017-02-25',
                'perihal'           => 'Laporan Tengah Tahun',
                'disposisi_id'      => 2,
                'file'              => 'laporan_tengah_tahun_2017_02.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '015/2017',
                'no_surat'          => '115/O/2017',
                'tanggal_surat'     => '2017-03-30',
                'perihal'           => 'Laporan Progres Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_progres_maret_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '016/2017',
                'no_surat'          => '116/O/2017',
                'tanggal_surat'     => '2017-04-15',
                'perihal'           => 'Laporan Progres April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_progres_april_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '017/2017',
                'no_surat'          => '117/O/2017',
                'tanggal_surat'     => '2017-05-20',
                'perihal'           => 'Laporan Progres Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_progres_mei_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '018/2017',
                'no_surat'          => '118/O/2017',
                'tanggal_surat'     => '2017-06-25',
                'perihal'           => 'Laporan Progres Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_progres_juni_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '001/2017',
                'no_surat'          => '101/O/2017',
                'tanggal_surat'     => '2017-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '002/2017',
                'no_surat'          => '102/O/2017',
                'tanggal_surat'     => '2017-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '003/2017',
                'no_surat'          => '103/O/2017',
                'tanggal_surat'     => '2017-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '004/2017',
                'no_surat'          => '104/O/2017',
                'tanggal_surat'     => '2017-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '005/2017',
                'no_surat'          => '105/O/2017',
                'tanggal_surat'     => '2017-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '006/2017',
                'no_surat'          => '106/O/2017',
                'tanggal_surat'     => '2017-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '007/2017',
                'no_surat'          => '107/O/2017',
                'tanggal_surat'     => '2017-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '008/2017',
                'no_surat'          => '108/O/2017',
                'tanggal_surat'     => '2017-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '009/2017',
                'no_surat'          => '109/O/2017',
                'tanggal_surat'     => '2017-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '010/2017',
                'no_surat'          => '110/O/2017',
                'tanggal_surat'     => '2017-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '011/2017',
                'no_surat'          => '111/O/2017',
                'tanggal_surat'     => '2017-11-10',
                'perihal'           => 'Laporan Bulanan November',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_november_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '012/2017',
                'no_surat'          => '112/O/2017',
                'tanggal_surat'     => '2017-12-20',
                'perihal'           => 'Laporan Bulanan Desember',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_desember_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '013/2017',
                'no_surat'          => '113/O/2017',
                'tanggal_surat'     => '2017-01-20',
                'perihal'           => 'Laporan Akhir Tahun',
                'disposisi_id'      => 1,
                'file'              => 'laporan_akhir_tahun_2017_01.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '014/2017',
                'no_surat'          => '114/O/2017',
                'tanggal_surat'     => '2017-02-25',
                'perihal'           => 'Laporan Tengah Tahun',
                'disposisi_id'      => 2,
                'file'              => 'laporan_tengah_tahun_2017_02.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '015/2017',
                'no_surat'          => '115/O/2017',
                'tanggal_surat'     => '2017-03-30',
                'perihal'           => 'Laporan Progres Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_progres_maret_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '016/2017',
                'no_surat'          => '116/O/2017',
                'tanggal_surat'     => '2017-04-15',
                'perihal'           => 'Laporan Progres April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_progres_april_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '017/2017',
                'no_surat'          => '117/O/2017',
                'tanggal_surat'     => '2017-05-20',
                'perihal'           => 'Laporan Progres Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_progres_mei_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '018/2017',
                'no_surat'          => '118/O/2017',
                'tanggal_surat'     => '2017-06-25',
                'perihal'           => 'Laporan Progres Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_progres_juni_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '019/2017',
                'no_surat'          => '119/O/2017',
                'tanggal_surat'     => '2017-07-30',
                'perihal'           => 'Laporan Progres Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_progres_juli_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '001/2017',
                'no_surat'          => '101/O/2017',
                'tanggal_surat'     => '2017-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '002/2017',
                'no_surat'          => '102/O/2017',
                'tanggal_surat'     => '2017-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '003/2017',
                'no_surat'          => '103/O/2017',
                'tanggal_surat'     => '2017-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '004/2017',
                'no_surat'          => '104/O/2017',
                'tanggal_surat'     => '2017-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '005/2017',
                'no_surat'          => '105/O/2017',
                'tanggal_surat'     => '2017-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '006/2017',
                'no_surat'          => '106/O/2017',
                'tanggal_surat'     => '2017-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '007/2017',
                'no_surat'          => '107/O/2017',
                'tanggal_surat'     => '2017-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '008/2017',
                'no_surat'          => '108/O/2017',
                'tanggal_surat'     => '2017-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '009/2017',
                'no_surat'          => '109/O/2017',
                'tanggal_surat'     => '2017-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '010/2017',
                'no_surat'          => '110/O/2017',
                'tanggal_surat'     => '2017-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '011/2017',
                'no_surat'          => '111/O/2017',
                'tanggal_surat'     => '2017-11-10',
                'perihal'           => 'Laporan Bulanan November',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_november_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '012/2017',
                'no_surat'          => '112/O/2017',
                'tanggal_surat'     => '2017-12-20',
                'perihal'           => 'Laporan Bulanan Desember',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_desember_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '013/2017',
                'no_surat'          => '113/O/2017',
                'tanggal_surat'     => '2017-01-20',
                'perihal'           => 'Laporan Akhir Tahun',
                'disposisi_id'      => 1,
                'file'              => 'laporan_akhir_tahun_2017_01.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '014/2017',
                'no_surat'          => '114/O/2017',
                'tanggal_surat'     => '2017-02-25',
                'perihal'           => 'Laporan Tengah Tahun',
                'disposisi_id'      => 2,
                'file'              => 'laporan_tengah_tahun_2017_02.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '015/2017',
                'no_surat'          => '115/O/2017',
                'tanggal_surat'     => '2017-03-30',
                'perihal'           => 'Laporan Progres Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_progres_maret_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '016/2017',
                'no_surat'          => '116/O/2017',
                'tanggal_surat'     => '2017-04-15',
                'perihal'           => 'Laporan Progres April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_progres_april_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '017/2017',
                'no_surat'          => '117/O/2017',
                'tanggal_surat'     => '2017-05-20',
                'perihal'           => 'Laporan Progres Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_progres_mei_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '018/2017',
                'no_surat'          => '118/O/2017',
                'tanggal_surat'     => '2017-06-25',
                'perihal'           => 'Laporan Progres Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_progres_juni_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '019/2017',
                'no_surat'          => '119/O/2017',
                'tanggal_surat'     => '2017-07-30',
                'perihal'           => 'Laporan Progres Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_progres_juli_2017.pdf',
                'tahun'             => '2017'
            ],
            [
                'no_arsip'          => '001/2018',
                'no_surat'          => '101/O/2018',
                'tanggal_surat'     => '2018-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '002/2018',
                'no_surat'          => '102/O/2018',
                'tanggal_surat'     => '2018-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '003/2018',
                'no_surat'          => '103/O/2018',
                'tanggal_surat'     => '2018-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '004/2018',
                'no_surat'          => '104/O/2018',
                'tanggal_surat'     => '2018-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '005/2018',
                'no_surat'          => '105/O/2018',
                'tanggal_surat'     => '2018-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '006/2018',
                'no_surat'          => '106/O/2018',
                'tanggal_surat'     => '2018-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '007/2018',
                'no_surat'          => '107/O/2018',
                'tanggal_surat'     => '2018-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '008/2018',
                'no_surat'          => '108/O/2018',
                'tanggal_surat'     => '2018-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '009/2018',
                'no_surat'          => '109/O/2018',
                'tanggal_surat'     => '2018-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '010/2018',
                'no_surat'          => '110/O/2018',
                'tanggal_surat'     => '2018-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2018.pdf',
                'tahun'             => '2018'
            ],
            [
                'no_arsip'          => '001/2019',
                'no_surat'          => '101/O/2019',
                'tanggal_surat'     => '2019-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '002/2019',
                'no_surat'          => '102/O/2019',
                'tanggal_surat'     => '2019-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '003/2019',
                'no_surat'          => '103/O/2019',
                'tanggal_surat'     => '2019-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '004/2019',
                'no_surat'          => '104/O/2019',
                'tanggal_surat'     => '2019-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '005/2019',
                'no_surat'          => '105/O/2019',
                'tanggal_surat'     => '2019-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '006/2019',
                'no_surat'          => '106/O/2019',
                'tanggal_surat'     => '2019-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '007/2019',
                'no_surat'          => '107/O/2019',
                'tanggal_surat'     => '2019-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2019.pdf',
                'tahun'             => '2019'
            ],
            [
                'no_arsip'          => '001/2020',
                'no_surat'          => '101/O/2020',
                'tanggal_surat'     => '2020-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '002/2020',
                'no_surat'          => '102/O/2020',
                'tanggal_surat'     => '2020-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '003/2020',
                'no_surat'          => '103/O/2020',
                'tanggal_surat'     => '2020-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '004/2020',
                'no_surat'          => '104/O/2020',
                'tanggal_surat'     => '2020-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '005/2020',
                'no_surat'          => '105/O/2020',
                'tanggal_surat'     => '2020-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '006/2020',
                'no_surat'          => '106/O/2020',
                'tanggal_surat'     => '2020-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '007/2020',
                'no_surat'          => '107/O/2020',
                'tanggal_surat'     => '2020-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '008/2020',
                'no_surat'          => '108/O/2020',
                'tanggal_surat'     => '2020-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '009/2020',
                'no_surat'          => '109/O/2020',
                'tanggal_surat'     => '2020-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '010/2020',
                'no_surat'          => '110/O/2020',
                'tanggal_surat'     => '2020-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '011/2020',
                'no_surat'          => '111/O/2020',
                'tanggal_surat'     => '2020-11-10',
                'perihal'           => 'Laporan Bulanan November',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_november_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '012/2020',
                'no_surat'          => '112/O/2020',
                'tanggal_surat'     => '2020-12-20',
                'perihal'           => 'Laporan Bulanan Desember',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_desember_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '013/2020',
                'no_surat'          => '113/O/2020',
                'tanggal_surat'     => '2020-01-20',
                'perihal'           => 'Laporan Akhir Tahun 2020',
                'disposisi_id'      => 1,
                'file'              => 'laporan_akhir_tahun_2020.pdf',
                'tahun'             => '2020'
            ],
            [
                'no_arsip'          => '001/2021',
                'no_surat'          => '101/O/2021',
                'tanggal_surat'     => '2021-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '002/2021',
                'no_surat'          => '102/O/2021',
                'tanggal_surat'     => '2021-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '003/2021',
                'no_surat'          => '103/O/2021',
                'tanggal_surat'     => '2021-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '004/2021',
                'no_surat'          => '104/O/2021',
                'tanggal_surat'     => '2021-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '005/2021',
                'no_surat'          => '105/O/2021',
                'tanggal_surat'     => '2021-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '006/2021',
                'no_surat'          => '106/O/2021',
                'tanggal_surat'     => '2021-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '007/2021',
                'no_surat'          => '107/O/2021',
                'tanggal_surat'     => '2021-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '008/2021',
                'no_surat'          => '108/O/2021',
                'tanggal_surat'     => '2021-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '009/2021',
                'no_surat'          => '109/O/2021',
                'tanggal_surat'     => '2021-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '010/2021',
                'no_surat'          => '110/O/2021',
                'tanggal_surat'     => '2021-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '011/2021',
                'no_surat'          => '111/O/2021',
                'tanggal_surat'     => '2021-11-10',
                'perihal'           => 'Laporan Bulanan November',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_november_2021.pdf',
                'tahun'             => '2021'
            ],
            [
                'no_arsip'          => '001/2022',
                'no_surat'          => '101/O/2022',
                'tanggal_surat'     => '2022-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '002/2022',
                'no_surat'          => '102/O/2022',
                'tanggal_surat'     => '2022-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '003/2022',
                'no_surat'          => '103/O/2022',
                'tanggal_surat'     => '2022-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '004/2022',
                'no_surat'          => '104/O/2022',
                'tanggal_surat'     => '2022-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '005/2022',
                'no_surat'          => '105/O/2022',
                'tanggal_surat'     => '2022-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '006/2022',
                'no_surat'          => '106/O/2022',
                'tanggal_surat'     => '2022-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '007/2022',
                'no_surat'          => '107/O/2022',
                'tanggal_surat'     => '2022-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '008/2022',
                'no_surat'          => '108/O/2022',
                'tanggal_surat'     => '2022-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '009/2022',
                'no_surat'          => '109/O/2022',
                'tanggal_surat'     => '2022-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2022.pdf',
                'tahun'             => '2022'
            ],
            [
                'no_arsip'          => '001/2023',
                'no_surat'          => '101/O/2023',
                'tanggal_surat'     => '2023-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2023.pdf',
                'tahun'             => '2023'
            ],
            [
                'no_arsip'          => '002/2023',
                'no_surat'          => '102/O/2023',
                'tanggal_surat'     => '2023-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2023.pdf',
                'tahun'             => '2023'
            ],
            [
                'no_arsip'          => '003/2023',
                'no_surat'          => '103/O/2023',
                'tanggal_surat'     => '2023-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2023.pdf',
                'tahun'             => '2023'
            ],
            [
                'no_arsip'          => '004/2023',
                'no_surat'          => '104/O/2023',
                'tanggal_surat'     => '2023-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2023.pdf',
                'tahun'             => '2023'
            ],
            [
                'no_arsip'          => '005/2023',
                'no_surat'          => '105/O/2023',
                'tanggal_surat'     => '2023-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2023.pdf',
                'tahun'             => '2023'
            ],
            [
                'no_arsip'          => '006/2023',
                'no_surat'          => '106/O/2023',
                'tanggal_surat'     => '2023-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2023.pdf',
                'tahun'             => '2023'
            ],
            [
                'no_arsip'          => '001/2024',
                'no_surat'          => '101/O/2024',
                'tanggal_surat'     => '2024-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '002/2024',
                'no_surat'          => '102/O/2024',
                'tanggal_surat'     => '2024-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '003/2024',
                'no_surat'          => '103/O/2024',
                'tanggal_surat'     => '2024-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '004/2024',
                'no_surat'          => '104/O/2024',
                'tanggal_surat'     => '2024-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '005/2024',
                'no_surat'          => '105/O/2024',
                'tanggal_surat'     => '2024-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '006/2024',
                'no_surat'          => '106/O/2024',
                'tanggal_surat'     => '2024-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '007/2024',
                'no_surat'          => '107/O/2024',
                'tanggal_surat'     => '2024-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '008/2024',
                'no_surat'          => '108/O/2024',
                'tanggal_surat'     => '2024-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '009/2024',
                'no_surat'          => '109/O/2024',
                'tanggal_surat'     => '2024-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '010/2024',
                'no_surat'          => '110/O/2024',
                'tanggal_surat'     => '2024-10-30',
                'perihal'           => 'Laporan Bulanan Oktober',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_oktober_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '011/2024',
                'no_surat'          => '111/O/2024',
                'tanggal_surat'     => '2024-11-10',
                'perihal'           => 'Laporan Bulanan November',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_november_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '012/2024',
                'no_surat'          => '112/O/2024',
                'tanggal_surat'     => '2024-12-20',
                'perihal'           => 'Laporan Bulanan Desember',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_desember_2024.pdf',
                'tahun'             => '2024'
            ],
            [
                'no_arsip'          => '001/2025',
                'no_surat'          => '101/O/2025',
                'tanggal_surat'     => '2025-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '002/2025',
                'no_surat'          => '102/O/2025',
                'tanggal_surat'     => '2025-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '003/2025',
                'no_surat'          => '103/O/2025',
                'tanggal_surat'     => '2025-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '004/2025',
                'no_surat'          => '104/O/2025',
                'tanggal_surat'     => '2025-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '005/2025',
                'no_surat'          => '105/O/2025',
                'tanggal_surat'     => '2025-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '006/2025',
                'no_surat'          => '106/O/2025',
                'tanggal_surat'     => '2025-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '007/2025',
                'no_surat'          => '107/O/2025',
                'tanggal_surat'     => '2025-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '008/2025',
                'no_surat'          => '108/O/2025',
                'tanggal_surat'     => '2025-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2025.pdf',
                'tahun'             => '2025'
            ],
            [
                'no_arsip'          => '001/2026',
                'no_surat'          => '101/O/2026',
                'tanggal_surat'     => '2026-01-10',
                'perihal'           => 'Laporan Bulanan Januari',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_januari_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '002/2026',
                'no_surat'          => '102/O/2026',
                'tanggal_surat'     => '2026-02-15',
                'perihal'           => 'Laporan Bulanan Februari',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_februari_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '003/2026',
                'no_surat'          => '103/O/2026',
                'tanggal_surat'     => '2026-03-20',
                'perihal'           => 'Laporan Bulanan Maret',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_maret_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '004/2026',
                'no_surat'          => '104/O/2026',
                'tanggal_surat'     => '2026-04-25',
                'perihal'           => 'Laporan Bulanan April',
                'disposisi_id'      => 4,
                'file'              => 'laporan_bulanan_april_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '005/2026',
                'no_surat'          => '105/O/2026',
                'tanggal_surat'     => '2026-05-30',
                'perihal'           => 'Laporan Bulanan Mei',
                'disposisi_id'      => 5,
                'file'              => 'laporan_bulanan_mei_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '006/2026',
                'no_surat'          => '106/O/2026',
                'tanggal_surat'     => '2026-06-10',
                'perihal'           => 'Laporan Bulanan Juni',
                'disposisi_id'      => 6,
                'file'              => 'laporan_bulanan_juni_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '007/2026',
                'no_surat'          => '107/O/2026',
                'tanggal_surat'     => '2026-07-15',
                'perihal'           => 'Laporan Bulanan Juli',
                'disposisi_id'      => 1,
                'file'              => 'laporan_bulanan_juli_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '008/2026',
                'no_surat'          => '108/O/2026',
                'tanggal_surat'     => '2026-08-20',
                'perihal'           => 'Laporan Bulanan Agustus',
                'disposisi_id'      => 2,
                'file'              => 'laporan_bulanan_agustus_2026.pdf',
                'tahun'             => '2026'
            ],
            [
                'no_arsip'          => '009/2026',
                'no_surat'          => '109/O/2026',
                'tanggal_surat'     => '2026-09-25',
                'perihal'           => 'Laporan Bulanan September',
                'disposisi_id'      => 3,
                'file'              => 'laporan_bulanan_september_2026.pdf',
                'tahun'             => '2026'
            ]
        ])->each(function ($item) {
            Arsip::create($item);
        });

    }
}
