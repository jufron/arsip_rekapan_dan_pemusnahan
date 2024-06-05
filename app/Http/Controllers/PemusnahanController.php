<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;

class PemusnahanController extends Controller
{
    public function index ()
    {
        $arsip = Arsip::onlyTrashed()->with('disposisi')->latest()->get();
        return view('pemusnahan.pemusnahan', compact('arsip'));
    }

    public function show ($id)
    {
        $arsip = Arsip::withTrashed()->findOrFail($id);
        return view('arsip.show', compact('arsip'));
    }

    public function restore ($id)
    {
        $arsip = Arsip::withTrashed()->findOrFail($id);
        $arsip->restore();
        toast('Berhasil Dikembalikan!','success');
        return redirect()->route('pemusnahan.index');
    }

    public function destroy ($id)
    {
        $arsip = Arsip::withTrashed()->findOrFail($id);
        $arsip->forceDelete();
        toast('Berhasil Terhapus Permanen!','success');
        return redirect()->route('pemusnahan.index');
    }
}
