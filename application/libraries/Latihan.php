<?php
class Latihan{
        public $hargaperkg_setrika=3500;
        public $hargaperkg_cucidansetrika=5000;
        public $hpakaiandalam=5000;
        public $htstruk=10000;
    function hitung($nama,$jenis,$berat,$pakaiandalam,$tstruk)
    {
        

        if ($jenis =="setrika") {
            $hargarperkg =$this->hargaperkg_setrika;
        }
        elseif ($jenis="Cuci dan Setrika") {
            $hargarperkg=$this->hargaperkg_cucidansetrika;
        }else{

        }


        $totalharga=$jenis*$berat;

        if ($pakaiandalam) {
            $totalharga=$this->hpakaiandalam;
        }elseif ($tstruk) {
            $totalharga=$this->htstruk;
        }
       
        echo $nama . "mengampil j";
    }
}
?>