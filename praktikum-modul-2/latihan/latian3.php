<html>
    <head><title>
        konversi nilai
    </title>
    <h2>Konversi nilai ke Huruf</h2>
</head>

    <body>
        <form method="post"action="latian3.php">
            <input type="number" name="nilai" placeholder="masukan nilai">
            <input type="submit" name = "hitung" value="Konversi"> 

        </form>
    </body>
</html>
<?php

 function nilai($n){
    if ($n <= 100){
        $nilai ="A";
    }
    if($n < 80){
        $nilai ="B";
    }
    if($n < 70){
        $nilai = "c";
    }
    if($n<60){
        $nilai ="D";
    }
    if($n<50){
        $nilai ="E";
    }
    return $nilai;
 }
 ?>

<html> <h3> Konversi nilai dari
    <?php echo($_POST['nilai'])?> =
    <?php
if(isset($_POST['hitung'])){
 $oke = nilai(($_POST['nilai']));
 echo $oke;
}
?><h3>
    </html>