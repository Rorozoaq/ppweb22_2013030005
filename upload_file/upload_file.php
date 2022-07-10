<?php
    //echo $_FILES["fileToUPload"]["tmp_name"];
    $target_dir ="FILE/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //cek tipe file
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    if($imageFileType=='jpg' || $imageFileType=='jpeg'){ 
        //cek ukuran file
        if ($_FILES["fileToUpload"]["size"] < 1024000) {
            //ubah nama file) 
            $target_file = $target_dir.'foto.jpg';    
                //upload file 
                if (move_upLoaded_fiLe($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                    echo "Upload File Berhasil <br>";
                    echo "<img src='".$target_dir."foto.jpg' width='500'>" ;
                }
                else 
                    echo "Upload File Gagal";
            } 
          
        else 
            echo "Upload File Gagal. Ukuran File melebihi 1MB"; 
     } 
     else 
     echo "Upload File Gagal. File harus dalam format jpg"; 
    
     //menampilkan file foto 
     echo "<img src.'".$target_dir."foto.jpg'>";
?>