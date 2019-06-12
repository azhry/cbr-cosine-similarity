<?php
 
 $namafile = $_FILES['berkas']['name'];
 $namasementara = $_FILES['berkas']['temp_name'];

 $dirupload = "file/";
 $file = move_uploaded_file($namasementara, $dirupload.$namafile);

 if ($file){
 	echo "upload berhasil <br>";
 	echo "link ; < a href = '". $dirupload.$namafile."'>".$namafile."</a>";
 }
 else
 {
 	echo " upload gagal";
 }

 ?>