<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\DisposisiRequest;

class DisposisiController extends Controller
{
    public function index (): View
    {
        $disposisi = Disposisi::query()->get();
        return view('disposisi.disposisi', compact('disposisi'));
    }

    public function create (): View
    {
        return view('disposisi.add');
    }

    public function store (DisposisiRequest $request)
    {
        Disposisi::create([
            'nama_disposisi'    => $request->input('nama_disposisi')
        ]);
        toast('Berhasil Disimpan!','success');
        return redirect()->route('disposisi.index');
    }

    public function destroy (Disposisi $disposisi)
    {
        $disposisi->delete();
        toast('Berhasil Terhapus!','success');
        return redirect()->route('disposisi.index');
    }
}
