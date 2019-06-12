<?php 
$id = $_POST['id_item'];
$stok = $_POST['stok'];

if($stok < 1)
{
	echo "<script>alert('Maaf, Menambah Stok Minimal Adalah 1');document.location='?module=atur_item_reward'</script>";
}
else
{
$query="UPDATE item_reward set `stok`=stok+'$stok' WHERE id_item='$id'";
	$hasil=mysqli_query($dbconnect,$query);

if(!$hasil)
{
		die(mysqli_error($dbconnect));
}
	
	echo "<script>alert('Berhasil Menambah Stok');document.location='?module=atur_item_reward'</script>";
}
?>