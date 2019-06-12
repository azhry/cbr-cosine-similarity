<?php 
$id = $_GET['id_explicit'];
$user = $_GET['user_id'];

$query="INSERT INTO like_explicit(`id_explicit`,`user_id`) VALUES ('$id','$user')";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Terima Kasih Atas Likenya');window.history.go(-1);</script>";
?>