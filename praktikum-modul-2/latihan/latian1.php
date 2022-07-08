<html>
    <head>
        <title>Hitung Luas dan Volume balok</title>
    </head>
    <body>
        <h2>Hitung Luas dan Volume Balok</h2>
        <div>
            <form method="post" action="latian1.php">
                <input type="number" name="panjang" placeholder="panjang"><br>
                <input type="number" name="lebar" placeholder="lebar"><br>
                <input type="number" name="tinggi" placeholder="tinggi"><br>
                <input type="submit" name = "hitung" value="Hitung">
                <input type="reset" value="Reset" >
            </form>
</html>

<?php
    class balok
    {
        function luas_balok($p,$l,$t){
            $lb = 2 * (($p * $l) +($p * $t)+($l * $t));
            return $lb;
        }
        function volume_balok($p,$l,$t){
            $vb = $p*$l*$t;
            return $vb;
        }
    }
    if(isset($_POST['hitung'])){
    $p = $_POST['panjang'];
    $l = $_POST['lebar'];
    $t = $_POST['tinggi'];
    $hitung = new balok;
    $l_balok = $hitung->luas_balok($p,$l,$t);
    $v_balok = $hitung->volume_balok($p,$l,$t);
    echo "panjang =".$_POST['panjang']."<br>";
    echo "lebar = ".$_POST['lebar']."<br>";
    echo "tinggi= ".$_POST['tinggi']."<br>";
    echo "luas balok =".$l_balok."<br>";
    echo "Volume balok =".$v_balok;
    }else 
?>