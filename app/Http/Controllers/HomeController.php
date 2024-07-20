<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Arsip;
use App\Models\Disposisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest_mounth = Carbon::now()->subMonth();
        $bulanSekarang = Carbon::now()->month;
        $tahunSekarang = Carbon::now()->year;


        $total_rekapan_pemusnahan = Arsip::withTrashed()->get()->count();
        $arsip_pemusnahan = Arsip::onlyTrashed()->get()->count();
        $arsip_perekapan = Arsip::query()->latest()->get()->count();

        $one_mount_latest = Arsip::query()->whereMonth('created_at', $bulanSekarang)
                                          ->whereYear('created_at', $tahunSekarang)
                                          ->count();

        $mounth = Carbon::now()->format('F') . " " . $tahunSekarang;

        return view('home', compact(
            'total_rekapan_pemusnahan',
            'arsip_pemusnahan',
            'arsip_perekapan',
            'one_mount_latest',
            'mounth'
        ));
    }

    public function getDataWhere (Request $request)
    {
        // belongsto
        $arsip = Arsip::query()->with('disposisi');
        $whereData;

        if ($request->query('tahun')) {
            $arsip->where('tahun', $request->query('tahun'));
            $whereData = $request->query('tahun');
        }

        if ($request->query('disposisi')) {
            $arsip->whereHas('disposisi', function ($query) use ($request) {
                $query->where('nama_disposisi', $request->query('disposisi'));
            });
            $whereData = $request->query('disposisi');
        }

        if ($request->query('rekapan_&_pemusnahan')) {
            $data = $arsip->withTrashed();
            $whereData = "rekapan pemusnahan : {$data->count()}";
        }

        if ($request->query('arsip_pemusnahan')) {
            $data = $arsip->onlyTrashed();
            $whereData = "arsip pemusnahan : {$data->count()}";
        }

        if ($request->query('arsip_date_now')) {
            $bulanSekarang = Carbon::now()->month;
            $tahunSekarang = Carbon::now()->year;

            $data = $arsip->whereMonth('created_at', $bulanSekarang)
                          ->whereYear('created_at', $tahunSekarang)
                          ->get();

            $whereData = "Arsip Masuk Untuk Bulan {$bulanSekarang} {$tahunSekarang} : {$data->count()}";
        }

        // todo arsip not delete
        if ($request->query('arsip')) {
            $data = $arsip;
            $whereData = "Total Arsip : {$data->count()}";
        }

        return view('arsip.arsipWhere', [
            'arsip' => $arsip->get(),
            'where' => $whereData
        ]);
    }

    public function arsipWhere ($where)
    {
        // * belongsto
        $arsip = Arsip::query()->with('disposisi');
        $title;

        if ($where === 'rekapan_&_pemusnahan') {
            $data = $arsip->withTrashed();
            $title = "Rekapan dan Pemusnahan : {$data->count()}";
        }

        if ($where === 'arsip_pemusnahan') {
            $data = $arsip->onlyTrashed();
            $title = "Arsip Pemusnahan : {$data->count()}";
        }

        if ($where === 'arsip_date_now') {
            $bulanSekarang = Carbon::now()->month;
            $tahunSekarang = Carbon::now()->year;

            $data = $arsip->whereMonth('created_at', $bulanSekarang)
                          ->whereYear('created_at', $tahunSekarang)
                          ->get();

            $title = "Arsip Masuk Untuk Bulan {$bulanSekarang} {$tahunSekarang} : {$data->count()}";
        }

        // todo arsip not delete
        if ($where === 'arsip') {
            $data = $arsip;
            $title = "Total Arsip : {$data->count()}";
        }

        return view('arsip.arsipWhere', [
            'arsip' => $arsip->get(),
            'title' => $title,
            'where' => $where
        ]);
    }

    public function getDataChartPie ()
    {
        $disposisiTotal = Disposisi::query()
                            ->select(['id', 'nama_disposisi'])
                            ->withCount('arsip')->get();

        return response()->json([
            'disposisi'         => $disposisiTotal
        ], 200);
    }

    public function getDataChartBar ()
    {
        $tahun = Arsip::query()->pluck('tahun')->toArray();
        return response()->json([
            'tahun' => $tahun
        ], 200);
    }

    public function getDataChartBar1 ()
    {
        $arsipRekapan = Arsip::query()->get()->count();
        $arsipPemusnahan = Arsip::onlyTrashed()->get()->count();

        return response()->json([
            'arsipRekapan'      => $arsipRekapan,
            'arsipPemusnahan'   => $arsipPemusnahan,
        ], 200);
    }
}
