<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Storage;
use PDF;
use App\Models\Pegawai;

class CetakController extends Controller
{
    public function cetak($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $kadis = Pegawai::where('jabatan', 'Kepala Dinas')->first();

        // Nomor Surat
    $bulanRomawi = $this->getRomanMonth(date('n'));
    $tahun = date('Y');
    $nomorSurat = "800 / ______ / Kominfo / {$bulanRomawi} /{$tahun}";

    $tanggal = now()->locale('id')->translatedFormat('d F Y');

        //pdf generate
        $pdf = PDF::loadView('pdf.datapegawai', compact('pegawai', 'kadis', 'nomorSurat', 'tanggal'))->setPaper('A4', 'portrait');

        // Buat nama file unik
        $filename = hash('sha256', $pegawai->id . now()) . '.pdf';

        // Simpan ke storage
        Storage::put("pdf/{$filename}", $pdf->output());
        // Tampilkan di browser (tidak didownload)
        return response($pdf->output(), 200)->header('Content-Type', 'application/pdf')->header('Content-Disposition', 'inline; filename="datapegawai.pdf"');
    }

    function getRomanMonth($month)
{
    $romanMonths = [
        1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV',
        5 => 'V', 6 => 'VI', 7 => 'VII', 8 => 'VIII',
        9 => 'IX', 10 => 'X', 11 => 'XI', 12 => 'XII',
    ];
    return $romanMonths[intval($month)];
}
}
