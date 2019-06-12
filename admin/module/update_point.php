<?php 
$total = $_GET['total'];
$user = $_SESSION['user_id'];

$query="UPDATE user set `point`=point-'$total' WHERE user_id='$user'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Mengurangi Point');document.location='?module=pilihreward'</script>";

?>