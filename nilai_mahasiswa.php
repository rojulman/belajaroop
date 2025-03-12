<?php 
class NilaiMahasiswa {
    public $nama;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;
    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.30;
    public const PERSENTASE_TUGAS = 0.45;

    public function getNilaiAkhir(){
        $nilai_akhir = $this->nilai_uts * self::PERSENTASE_UTS +
          $this->nilai_uas * self::PERSENTASE_UAS +
          $this->nilai_tugas * self::PERSENTASE_TUGAS;
        return $nilai_akhir;
    }
    public function kelulusan(){
        if($this->getNilaiAkhir() >= 60){
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }

}