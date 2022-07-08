<?php
    class matematika{
        function tambah($a,$b){
            $c = $a + $b;
            return $c;
        }
        function kuadrat($x){
            return $x * $x;
        }
        function keliling_lingkaran($r){
            $kel = 2 * 3.14 * $r;
            return $kel;
        }
        function luas_lingkaran($r){
            $luas = 3.14 * $this->kuadrat($r);
            return $luas;
        }
    }
 ?>
