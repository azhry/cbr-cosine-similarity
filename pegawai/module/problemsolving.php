<?php
	
	ini_set('xdebug.var_display_max_depth', '10');
	ini_set('xdebug.var_display_max_children', '256');
	ini_set('xdebug.var_display_max_data', '1024');

	$dbconnect = mysqli_connect('localhost','root','','cesar');
	$sql = 'SELECT * FROM gejala';
	$query_gejala = mysqli_query($dbconnect, $sql);

	if (isset($_POST['submit']))
	{
		$problems = [];
		$sql_problem 	= 'SELECT * FROM problem';
		$query_problem	= mysqli_query($dbconnect, $sql_problem);		
		while ($row = mysqli_fetch_assoc($query_problem))
		{
			$row_gejala = [];
			$sql_gejala_masalah = 'SELECT * FROM gejala_masalah WHERE id_masalah = ' . $row['id_problem'];
			$query_gejala_masalah = mysqli_query($dbconnect, $sql_gejala_masalah);
			while ($gejala_masalah = mysqli_fetch_assoc($query_gejala_masalah))
			{
				$sql_gejala = 'SELECT * FROM gejala WHERE id = ' . $gejala_masalah['id_gejala'];
				$query_row_gejala = mysqli_query($dbconnect, $sql_gejala);
				$res = mysqli_fetch_assoc($query_row_gejala);
				$row_gejala []= $res;
			}
			
			$row['gejala'] = $row_gejala;
			$problems []= $row;
		}

		$all_gejala = [];
		$selected_gejala = [];
		$selected_gejala_complete = [];
		while ($gejala = mysqli_fetch_assoc($query_gejala))
		{
			$all_gejala []= $gejala;
			if (isset($_POST['gejala_' . $gejala['id']]))
			{
				$selected_gejala_complete []= $gejala;
				$sql_selected = 'SELECT * FROM gejala WHERE id = ' . $_POST['gejala_' . $gejala['id']];
				$query_selected = mysqli_query($dbconnect, $sql_selected);
				$selected = mysqli_fetch_assoc($query_selected);
				$selected_gejala []= $selected['representasi'];
			}
		}
		mysqli_data_seek($query_gejala, 0);

		require_once '../CaseBasedReasoning.php';
		$cbr = new CaseBasedReasoning($all_gejala);
		$cbr->fit3($problems);

		$sorted_problems = $cbr->rank2($selected_gejala);
	}
?> 

<h3>Problem Solving</h3>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Gejala</h6>
	</div>
	<div class="card-body">
		<form action="./index.php?module=problemsolving" method="POST">
			<ul style="list-style: none;">
			<?php  
				while ($row = mysqli_fetch_assoc($query_gejala)) {
					echo '<li><input type="checkbox" name="gejala_' . $row['id'] . '" value="' . $row['id'] . '"> ' . $row['gejala'] . '</li>';
				}

				mysqli_data_seek($query_gejala, 0);
			?>	
			</ul>

			<input type="submit" name="submit" value="Proses" class="btn btn-success">	
		</form>
	</div>
</div>

<?php if (isset($sorted_problems)): ?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Hasil Problem Solving</h6>
	</div>
	<div class="card-body">
		<h4>Gejala yang Dipilih</h4>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Gejala</th>
					<th>Representasi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($selected_gejala_complete as $i => $row): ?>
					<tr>
						<td><?= $i + 1 ?></td>
						<td><?= $row['gejala'] ?></td>
						<td><?= $row['representasi'] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<h4>Hasil Perankingan</h4>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Kasus</th>
					<th>Gejala</th>
					<th>Solusi</th>
					<th>Jarak Kedekatan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($sorted_problems as $i => $row): ?>
					<tr>
						<td><?= $i + 1 ?></td>
						<td><?= $row['problem'] ?></td>
						<td>
							<ul>
								<?php foreach ($row['gejala'] as $gejala): ?>
									<li><?= $gejala['gejala'] ?></li>
								<?php endforeach; ?>
							</ul>
						</td>
						<td>
							<ul>
							<?php  
								$sql_solusi = 'SELECT * FROM solusi WHERE id_masalah = ' . $row['id_problem'];
								$query_solusi = mysqli_query($dbconnect, $sql_solusi);
								while ($solusi = mysqli_fetch_assoc($query_solusi))
								{
									echo '<li>' . $solusi['solusi'] . '</li>';
								}
							?>	
							</ul>
						</td>
						<td><?= $row['distance'] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<?php endif; ?>