<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Arsip;
use App\Models\Disposisi;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ArsipRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ArsipController extends Controller
{
    public function index (): View
    {
        $arsip = Arsip::query()->with('disposisi')->latest()->get();
        return view('arsip.arsip', compact('arsip'));
    }

    public function create (): View
    {
        $disposisi = Disposisi::query()->latest()->get();
        return view('arsip.add', compact('disposisi'));
    }

    public function store (ArsipRequest $request)
    {
        // dd($request->all());
        Arsip::create([
            'no_arsip'          => (string) Str::uuid(),
            'no_surat'          => $request->input('no_surat'),
            'tanggal_surat'     => $request->input('tanggal_surat'),
            'perihal'           => $request->input('perihal'),
            'disposisi_id'      => $request->input('disposisi_id'),
            'file'              => $request->input('file_path'),
            'tahun'             => Carbon::parse($request->input('tanggal_surat'))->year,
        ]);

        toast('Berhasil Tersimpan!','success');
        return redirect()->route('arsip.index');
    }

    public function show (Arsip $arsip)
    {
        return view('arsip.show', compact('arsip'));
    }

    public function edit (Arsip $arsip)
    {
        $disposisi = Disposisi::query()->latest()->get();
        return view('arsip.edit', compact('arsip', 'disposisi'));
    }

    public function update (ArsipRequest $request, Arsip $arsip)
    {
        $arsip->update([
            'no_arsip'          => (string) Str::uuid(),
            'no_surat'          => $request->input('no_surat'),
            'tanggal_surat'     => $request->input('tanggal_surat'),
            'perihal'           => $request->input('perihal'),
            'disposisi_id'      => $request->input('disposisi_id'),
            'file'              => $request->input('file_path'),
            'tahun'             => Carbon::parse($request->input('tanggal_surat'))->year,
        ]);
        toast('Berhasil Terupdate!','success');
        return redirect()->route('arsip.index');
    }

    public function destroy (Arsip $arsip)
    {
        $arsip->delete();
        toast('Berhasil Terhapus!','success');
        return redirect()->route('arsip.index');
    }

    public function download (Arsip $arsip)
    {
        $fileName = $arsip->file;
        if (Storage::disk('public')->missing($fileName)) {
            abort(404, 'File Not Found');
        }

        return Storage::disk('public')->download($fileName);
    }

    public function showFile (Arsip $arsip)
    {
        $fileName = $arsip->file;
        // if (Storage::disk('public')->missing($fileName)) {
        //     abort(404, 'File Not Found');
        // }

        $fille = asset('storage/'.$fileName);
        // return response($fille, 200)
        //     ->header('Content-Type', 'application/pdf');

        // return response()->stream($fille, 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="yourfile.pdf"',
        // ]);
        return view('arsip.showFile', compact('arsip'));
    }
}
