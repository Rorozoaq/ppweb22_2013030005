
<?php
$conn = new mysqli('localhost','root','','proweb_uas');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>