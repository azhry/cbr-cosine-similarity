<?php 
$id = $_GET['id_tacit'];

$query="UPDATE tacit_knowledge set `validasi`='Valid' WHERE id_tacit='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Divalidasi');document.location='?module=dapat_point_tacit'</script>";

?>