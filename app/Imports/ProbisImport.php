<?php

namespace App\Imports;

use App\Models\Probis;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ProbisImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        return new Probis([
            'id_probis' => $row['id_proses_bisnis'],
            'nama_probis' => $row['nama_bisnis_urusan'],
            'uraian' => $row['uraian_bisnis_proses'],
            'sasaran' => $row['sasaran_strategis_isikan_sasaran_strategis_eselon_1_yang_terkait_dengan_proses_bisnis_dimaksud'],
            'indikator' => $row['indikator_kinerja_utama_iku_tuliskan_indikator_yang_menjadi_ukuran_keberhasilan_dari_sasaran_strategis_yang_bersesuaian'],
            'nilai_iku_target' => $row['nilai_iku_target_nilai_iku_yang_ditargetkan_223'],
            'nilai_iku_Realisasi' => $row['nilai_iku_realisasi_nilai_realisasi_iku_yang_dicapai_222'],
            'rab_l1' => $row['rab_level_1_nasional_dependency'], 
            'rab_l2' => $row['rab_level_2_dependency'],
            'rab_l3' => $row['rab_level_3_dependency'],
            'rab_l4' => $row['rab_level_4_dependency'],
            'rab_l5' => $row['rab_level_5_dependency'],
            'unit_kerja' => $row['unit_kerja_dependency'], 
            'instansi'  => $row['instansi'],
        ]);
    }


}
