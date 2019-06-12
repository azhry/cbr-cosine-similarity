<?php 
$id = $_GET['id_explicit'];

$query="UPDATE explicit set `validasi`='Valid' WHERE id_explicit='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Divalidasi');document.location='?module=dapat_point_explicit'</script>";

?>