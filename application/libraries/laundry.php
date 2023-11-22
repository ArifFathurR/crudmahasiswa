<?php
class Laundry {
    public $harga_setrika = 3500; 
    public $harga_cuci_dan_setrika = 5000; 
    public $cas_pakaian_dalam = 5000; 
    public $denda_tanpa_struk = 10000; 

     function hitungTotalHarga($jenis_laundry, $berat_pakaian, $pakaian_dalam = false, $membawa_struk = true) {
        if ($jenis_laundry == "setrika") {
            $harga_per_kg = $this->harga_setrika;
        } elseif ($jenis_laundry == "cuci setrika") {
            $harga_per_kg = $this->harga_cuci_dan_setrika;
        } else {
            return "Jenis laundry tidak valid";
        }

        $total_harga = $harga_per_kg * $berat_pakaian;

        if ($pakaian_dalam) {
            $total_harga += $this->cas_pakaian_dalam;
        }

        if (!$membawa_struk) {
            $total_harga += $this->denda_tanpa_struk;
        }

        return $total_harga;
    }
}
?>