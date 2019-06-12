<?php 
$id = $_POST['id_tacit'];
$judul = $_POST['judul'];
$isi = $_POST['isi_tacit'];

$query="UPDATE tacit_knowledge set `judul`='$judul',`isi_tacit`='$isi' WHERE id_tacit='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Knowledge Berhasil Direvisi');document.location='?module=revise_tacit'</script>";
?>