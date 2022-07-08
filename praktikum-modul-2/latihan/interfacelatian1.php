<html>
    <head>
        <title>luas dan volume balok</title>
    </head>
    <body>
        <div>
            <form method="post" action="latian1.php">
                <input type="number" name="panjang" placeholder="panjang"><br>
                <input type="number" name="lebar" placeholder="lebar"><br>
                <input type="number" name="tinggi" placeholder="tinggi"><br>
                <input type="submit" name = "hitung" value="Hitung">
            </form>
            <?php
                if(isset($_POST['hitung'])){
                    include "latian1.php";
                    $p = $_POST['panjang'];
                    $l = $_POST['lebar'];
                    $t = $_POST['tinggi'];
                    $hitung = new balok;
                    $l_balok = $hitung->luas_balok($p,$l,$t);
                    echo "luas balok =".$l_balok;
                }
            ?>
        </div>
    
    </body>
</html>