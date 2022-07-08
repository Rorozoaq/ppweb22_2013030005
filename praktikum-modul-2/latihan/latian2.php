<html>
    <head>
        <title>Hitung Luas dan Volume bola</title>
    </head>
    <body>
        <h2>Hitung Luas dan Volume bola</h2>
        <div>
            <form method="post" action="latian2.php">
                <input type="number" name="jari-jari" placeholder="jari-jari bola"><br>
                <input type="submit" name = "hitung" value="Hitung">
                <input type="reset" value="Reset" >
            </form>

<?php
    class bola{
        function luas_bola($r){
            $lp = 4*3.14*$r*$r;
            return $lp; 
        }
        function volume_bola($r){
            $v= 4/3 * 3.14 * $r * $r *$r;
            return $v;
        }
    }
    if(isset($_POST['hitung'])){
        $r = $_POST['jari-jari'];

        $hitung = new bola;
        $l_bola = $hitung->luas_bola($r);
        $v_bola = $hitung->volume_bola($r);
        echo "jari - jari bola = ".$_POST['jari-jari']."<br>";
        echo "luas_bola = ".$l_bola."<br>";
        echo "volume_bola = ".$v_bola;
    }
?>
</html>