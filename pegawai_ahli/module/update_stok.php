<?php 
$id = $_GET['id_item'];
$jumlah = $_GET['jumlah'];
$total = $_GET['total'];

$query="UPDATE item_reward set `stok`=stok-'$jumlah' WHERE id_item='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Mengurangi Stok');document.location='?module=update_point&total=$total'</script>";
?>