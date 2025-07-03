<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //dd($row);
        return new Data([
            'kode_data' => $row['kode_data'],
            'id_data' => $row['id_data'],
            'nama_data' => $row['nama_data'],
            'uraian_data' => $row['uraian_data'],
            'tujuan_dari' => $row['tujuan_dari'],
            'aplikasi' => $row['aplikasi'],
            'sifat_data' => $row['sifat_data'],
            'validitas_data' => $row['validitas_data'],
            'jenis_data' => $row['jenis_data'],
            'penghasil_data' => $row['penghasil_data'],
            'penanggung_jawab_data' => $row['penanggung_jawab_data'],
            'informasi_terkait_input' => $row['informasi_terkait_input'],
            'informasi_terkait_output' => $row['informasi_terkait_output'],
            'interoperabilitas' => $row['interoperabilitas'],
            'proses_bisnis_dependency' => $row['proses_bisnis_dependency'],
            'layanan_dependency' => $row['layanan_dependency'],
            'rad_level_1_dependency' => $row['rad_level_1_dependency'],
            'rad_level_2_dependency' => $row['rad_level_2_dependency'],
            'standar_teknis_spbe' => $row['standar_teknis_dan_prosedur_keamanan_spbe_dependency'],
            'audit_keamanan_spbe' => $row['audit_keamanan_spbe_dependency'],
            'identifikasi_kerentanan_spbe' => $row['identifikasi_kerentanan_keamanan_spbe_dependency'],
            'kelaikan_keamanan_spbe' => $row['kelaikan_keamanan_spbe_dependency'],
            'edukasi_kesadaran_spbe' => $row['edukasi_kesadaran_keamanan_spbe_dependency'],
            'penanganan_insiden_spbe' => $row['penanganan_insiden_keamanan_spbe_dependency'],
            'peningkatan_keamanan_spbe' => $row['peningkatan_keamanan_spbe_dependency'],
            'instansi' => $row['instansi_dependency'],
        ]);
    }
}
