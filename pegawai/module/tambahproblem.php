<?php
  	$dbconnect = mysqli_connect('localhost','root','','cesar');
  	$sql = 'SELECT * FROM gejala';
  	$query = mysqli_query($dbconnect, $sql);
?> 

<div class="outter-form-login">
	<form method="post" name="login" action="?module=registrasiproblem">

		<div class="form-group">
			<input type="text" class="form-control" name="problem" placeholder="Judul Masalah">
		</div>

		<button type="button" id="tambah-gejala-btn" class="btn btn-warning btn-sm">
			<i class="fa fa-plus"></i> Tambah Gejala
		</button><br><br>
		<div id="gejala">
			<div class="form-group">
				<select class="form-control" name="gejala[]" required>
					<option value="">Pilih Gejala</option>
					<?php while ($data = mysqli_fetch_assoc($query)) { ?>
						<option value="<?= $data['id'] ?>"><?= $data['gejala'] ?></option>
					<?php 
						} 
						mysqli_data_seek($query, 0);
					?>
				</select>
			</div>
		</div>


		<button type="button" id="tambah-solusi-btn" class="btn btn-warning btn-sm">
			<i class="fa fa-plus"></i> Tambah Solusi
		</button><br><br>
		<div id="solusi">
			<div class="form-group">
				<input type="text" class="form-control" name="solusi[]" required placeholder="Solusi">
			</div>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="tanggal" placeholder="tanggal" value="<?php echo date("Y-m-d"); ?>" readonly="readonly">
		</div>

		<input type="submit" class="btn btn-block btn-custom-green" value="Tambah Data Kasus">
		<div class="text-center forget">
			<p>Back To <a href="index.php">Home</a></p>
		</div>

	</form>
</div>
</div>

<script type="text/javascript">
	$('#tambah-gejala-btn').on('click', function() {
		$('#gejala').append('<div class="form-group">' +
				'<select class="form-control" name="gejala[]" required>' +
					'<option value="">Pilih Gejala</option>' +
					<?php while ($data = mysqli_fetch_assoc($query)) { ?>
						'<option value="<?= $data['id'] ?>"><?= $data['gejala'] ?></option>' +
					<?php } ?>
				'</select>' +
			'</div>');
	});

	$('#tambah-solusi-btn').on('click', function() {
		$('#solusi').append('<div class="form-group">' +
				'<input type="text" class="form-control" name="solusi[]" required placeholder="Solusi">' +
			'</div>');
	});
</script>