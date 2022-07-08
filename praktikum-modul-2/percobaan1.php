<?php
    class matematika
    {
        function tambah ($a,$b){
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
   
        
        $math=new matematika();
        $jari = 10;
        $tambah=$math->tambah($jari,$jari);
        $kuadrat=$math->kuadrat($jari);
        $kel_lingkaran = $math->keliling_lingkaran($jari);
        $luas_lingkaran = $math->luas_lingkaran($jari);

        echo "Menghitung Keliling dan Luas Lingkaran<br>";
        echo "Jari-Jari di tambah = ".$tambah."<br>";
        echo "Jari-Jari di kuadrat =".$kuadrat."<br>";
        echo "Jari-Jari = " .$jari."<br>";
        echo "keliling = ".$kel_lingkaran. "<br>";
        echo "Luas = ".$luas_lingkaran;
        
?>
