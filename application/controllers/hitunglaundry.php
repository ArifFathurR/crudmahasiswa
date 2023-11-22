<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hitunglaundry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Laundry');
    }

    public function index()
    {
        $t1 = $this->laundry->hitungTotalHarga("setrika",6.5);
        echo "Ani mengambil jenis laundry setrika saja dengan berat pakaian 6.5 kg, maka total harga yang harus dibayar adalah Rp. " . $t1;
        echo '<br>';
        $t2= $this->laundry->hitungTotalHarga("cuci setrika",8,true);
        echo "Ina mengambil jenis laundry cuci dan setrika dengan berat pakaian 8 kg yang didalamnya terdapat pakaian dalam, maka total harga yang harus dibayar adalah Rp. " . $t2;
        echo '<br>';
        $t3=$this->laundry->hitungTotalHarga("setrika",3.5,false);
        echo "Nia ingin mengambil pakaiannya yang sudah siap di laundry, dengan berat pakaian 3.5 kg, akan tetapi dia lupa membawa struk, maka total harga yang harus dibayar adalah Rp. " . $t3;
    }
}
?>
