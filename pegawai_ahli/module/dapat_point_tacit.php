<?php 
$id = $_SESSION['user_id'];

$query="UPDATE user set `point`=point+20 WHERE user_id='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Memberikan Point');document.location='?module=valid_tacit'</script>";

?>