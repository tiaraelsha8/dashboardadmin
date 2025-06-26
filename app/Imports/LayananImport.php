<?php

namespace App\Imports;

use App\Models\Layanan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LayananImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //dd($row);
        return new Layanan([
            'kode_layanan' => $row['kode_layanan'],
            'id_layanan' => $row['id_layanan'],
            'nama_layanan' => $row['nama_layanan'],
            'tujuan' => $row['tujuan'],
            'fungsi' => $row['fungsi'],
            'penanggung_jawab_pelayanan' => $row['penanggung_jawab_pelayanan'],
            'unit_pelaksana' => $row['unit_pelaksana_unit_kerja_dependency'],
            'kementerian_lembaga_terkait' => $row['kementerianlembaga_terkait'],
            'target_layanan' => $row['target_layanan'],
            'metode_layanan' => $row['metode_layanan'],
            'potensi_manfaat' => $row['potensi_manfaat'],
            'potensi_ekonomi' => $row['potensi_ekonomi'],
            'potensi_resiko' => $row['potensi_resiko'],
            'mitigasi_resiko' => $row['mitigasi_resiko'],
            'data' => $row['data'],
            'aplikasi' => $row['aplikasi'],
            'proses_bisnis_dependency' => $row['proses_bisnis_dependency'],
            'urusan_pemerintahan' => $row['urusan_pemerintahan_rab_level_2'],
            'ral_level_1_dependency' => $row['ral_level_1_dependency'],
            'ral_level_2_dependency' => $row['ral_level_2_dependency'],
            'instansi' => $row['instansi'],
        ]);
    }
}
