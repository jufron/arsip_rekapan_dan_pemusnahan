<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class FilePondUploadController extends Controller
{
    public function upload (Request $request)
    {
        $request->validate([
            'file'  => ['mimes:pdf']
        ]);
        // hapus data lama dulu jika ada kalau tidak ada baru upload
        // tapi kalo file masih ada hapus baru simpan yang baru
        $gullPathNam = $request->file('file')->store('pdf', 'public');
        return response()->json([
            'path'      => $gullPathNam
        ], 200);
    }

    public function destroy (Request $request)
    {
        $fileName = $request->file;

        if (Storage::disk('public')->exists($fileName)) {
            Storage::disk('public')->delete($fileName);
        }

        return response()->json([
            'message'   => 'File Deleted'
        ], 200);
    }
}
