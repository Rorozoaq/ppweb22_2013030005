<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('koneksi.php');
if($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]); 
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM item WHERE nama IN (".$search_text.") ORDER BY id DESC");
}else{
    $query = $conn->query("SELECT * FROM item ORDER BY nama DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if($total_row > 0)  
   while ($row = $query ->fetch_object()) { 
    $output.= '<div class="col-4" align="center" ><div class="card mt-5"><div class="card-header"><h4>'.$row->nama.'</h4> <br> '.$row->barcode.'</div><div class="card-body"> <h2>Rp. '.$row->harga.'/ '.$row->satuan.'</h2><div>'.$row->id.'<br>'.date("d/m/y").' </div></div></div></div><br>';
   }

echo $output;
?>