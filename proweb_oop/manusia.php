<?php
    class manusia{
        public $warna_mata = 'merah';
        function __construct(){
            echo " Ini adalah manusia<br>";
        }
        function tangan($jml,$jari){
            echo "fungsi tangan";
            echo "<br>Jml tangan: ".$jml;
            echo "<br>Jml jari: ".$jari;
            echo "<br>Warna mata: ".$this->warna_mata;
            echo "<br><br>";
        }

        function kepala($jml,$buah){
            echo " fungsi rambut";
            echo "<br>mata".$jml;
            echo "<br>hidung".$buah;
            echo "<br><br>";

        } 
    }
    
    $tangan = new manusia();
    $tangan->tangan(5,1);
    $tangan->kepala(9,1);


    $kepala = new manusia();
    $kepala ->tangan(2,1);
    $kepala ->kepala(3,1);
    

    
?>    