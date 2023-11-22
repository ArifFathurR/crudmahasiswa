<?php
class Persegi 
{
    function keliling($sisi)
    {
        $keliling = $sisi*4;
        echo "keliling persegi panang dengan sisi " . $sisi . " adalah " . $keliling;
    }

    function luas($sisi)
    {
        $luas = $sisi * $sisi;
        echo "luas persegi dengan sisi " . $sisi . " adalah " . $luas;
    }
}
?>