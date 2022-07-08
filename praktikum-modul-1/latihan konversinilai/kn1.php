<html> 
    <head> 
        <title>konversi nilai sederhana</title> 
    </head> 
    <body>  

    <form method="post" action=""> 
    NILAI ANGKA <input type="text" name="nilai" />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

<?php
if(isset($_POST['submit'])){ 
$nilai=$_POST['nilai'];

if ($nilai<40)
{
    echo "$nilai DALAM HURUF E"; 
}
else if($nilai<55)
{
    echo "$nilai DALAM HURUF D"; 
}
else if($nilai<60)
{
    echo "$nilai DALAM HURUF C"; 
}
else if($nilai<70)
{
    echo "$nilai DALAM HURUF B"; 
}
else if($nilai<=85)
{
   echo "$nilai DALAM HURUF B+"; 
}
else if ($nilai<=100)
{
    echo "$nilai DALAM HURUF A"; 
}
}
?>
</body> 
</html>