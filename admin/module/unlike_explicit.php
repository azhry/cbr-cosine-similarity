<?php 
$id = $_GET['id_explicit'];
$user = $_GET['user_id'];

$query="DELETE from like_explicit where id_explicit='$id' and user_id='$user'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Terima Kasih Atas Unlikenya');window.history.go(-1);</script>";
?>