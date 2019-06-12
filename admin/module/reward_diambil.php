<?php 
$id = $_GET['id_reward'];

$query="UPDATE reward set `status`='Sudah Diambil' WHERE id_reward='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Reward Telah Diambil');document.location='?module=lihat_reward'</script>";
?>