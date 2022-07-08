<html>
<title>kalkulator</title>

<body>
    <h2 class="judul">kalkulator</h2>
    <div class="kalkulator">
        <p> Angka input <p>
        <form action=" " method ="GET">
        <input type = "text" name="bilangan1" autocomplete="off" placeholder = "masukan angka">
        <br>
        <input type = "text" name="bilangan2" autocomplete="off" placeholder = "masukan angka">
        <br>

        <input type = "submit" name="tambah" value ="+">
        <input type = "submit" name="kurang" value ="-">
        <input type = "submit" name="kali" value ="x">
        <input type = "submit" name="bagi" value ="/">
        <input type = "submit" name="mod" value ="mod">

    </div>
</body>
</html>

<?php
$bilangan1=$_GET['bilangan1'];
$bilangan2=$_GET['bilangan2'];

if (isset($_GET['tambah'])) {
    $hasil=TAMBAH($bilangan1,$bilangan2);
}
if (isset($_GET['kurang'])) {
    $hasil=KURANG($bilangan1,$bilangan2);

}
if (isset($_GET['kali'])) {
    $hasil=KALI($bilangan1,$bilangan2);
}

if (isset($_GET['bagi'])) {
    $hasil=BAGI($bilangan1,$bilangan2);
}
if (isset($_GET['mod'])) {
    $hasil=MOD($bilangan1,$bilangan2); 
}

function TAMBAH ($bilangan1,$bilangan2){
    return $bilangan1+$bilangan2;
}
function KURANG ($bilangan1,$bilangan2){
    return $bilangan1-$bilangan2;
}
function KALI ($bilangan1,$bilangan2){
    return $bilangan1*$bilangan2;
}
function BAGI ($bilangan1,$bilangan2){
    return $bilangan1/$bilangan2;
}
function MOD ($bilangan1,$bilangan2){
    return $bilangan1%$bilangan2;
}
?>
<html>
    <input type="text" value="<?php echo $hasil; ?>">

</html>
