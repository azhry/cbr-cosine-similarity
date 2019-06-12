<?php
 
    
  	$masalah 	= $_POST['problem'];
    $solusi 	= $_POST['solusi'];
    $gejala 	= $_POST['gejala'];
    $tanggal 	= $_POST['tanggal'];
   

    // turn off auto commit for before doing transaction
    mysqli_autocommit($dbconnect, false);

    // flag for checking if transaction success
    $flag = true;

	if (empty($masalah)) {
		header('location: ./tambah.php?error=' . base64_encode('Username tidak boleh kosong'));
	}

	if (count($solusi) <= 0) {
		header('location: ./tambah.php?error=' . base64_encode('Solusi tidak boleh kosong'));
	}

	if (count($gejala) <= 0) {
		header('location: ./tambah.php?error=' . base64_encode('Gejala tidak boleh kosong'));
	}

	if (empty($tanggal)) {
		header('location: ./tambah.php?error=' . base64_encode('Tanggal tidak boleh kosong'));
	}

	$sql_problem = 'INSERT INTO problem(problem, solusi, Tanggal) VALUES("' . $masalah . '", "", "' . $tanggal . '")';
	$result = mysqli_query($dbconnect, $sql_problem);
	if (!$result) {
		$flag = false;
		echo 'Database Error: ' . mysqli_error($dbconnect) . '<br>';
	}

	$id_problem = mysqli_insert_id($dbconnect);
	
	foreach ($gejala as $row) {
		$sql = 'INSERT INTO gejala_masalah(id_masalah, id_gejala) VALUES(' . $id_problem . ', ' . $row . ')';
		$result = mysqli_query($dbconnect, $sql);
		if (!$result) {
			$flag = false;
			echo 'Database Error: ' . mysqli_error($dbconnect) . '<br>';
		}
	}

	foreach ($solusi as $row) {
		$sql = 'INSERT INTO solusi(id_masalah, solusi) VALUES(' . $id_problem . ', "' . $row . '")';
		$result = mysqli_query($dbconnect, $sql);
		if (!$result) {
			$flag = false;
			echo 'Database Error: ' . mysqli_error($dbconnect) . '<br>';
		}	
	}

	if ($flag) {
		mysqli_commit($dbconnect);
		echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=problem';</script>";
	}
	else {
		mysqli_rollback($dbconnect);
		echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=problem';</script>";
	}

	// $sql = "INSERT INTO problem ( problem, solusi, tanggal) VALUES ('$masalah','$solusi','$tanggal')";
	// $insert = $dbconnect->query($sql);
	// if (!$insert) {
	// 	echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=problem';</script>";
	// } 
	// else {
	// 	echo "<script>alert('Insert Data Berhasil'); window.location.href='?module=problem';</script>";
	// }
  
?>

