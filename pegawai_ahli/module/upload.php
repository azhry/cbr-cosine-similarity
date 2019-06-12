<?php
  $dbconnect = mysqli_connect('localhost','root','','cesar');
?>
<script> $(document).ready(function(){
            $("#tanggal").datepicker({
            })
           })
</script>

<?php
			if(isset($_POST['upload']))
      {
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$parts 					= explode('.', $file_name);
				$file_ext			 = end($parts);
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
      $isi_explicit = $_POST['isi_explicit'];
      $nama = $_POST['nama_file'];
        $tanggal  = $_POST['tanggal'];
        $NIP = $_POST['NIP'];

        function ubahTanggal($tanggal){
         $pisah = explode('/',$tanggal);
         $array = array($pisah[2],$pisah[0],$pisah[1]);
         $satukan = implode('-',$array);
         return $satukan;}
        $tanggal = ubahTanggal($tanggal);


				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = './../bismillah/startbootstrap-sb-admin-2-gh-pages/upload/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$sql = "INSERT INTO explicit (isi_explicit,nama_file,file,tanggal,NIP ) VALUES('$isi_explicit', '$nama','$lokasi', '$tanggal')";
				    $insert = $dbconnect->query($sql);
            if (! $insert) {
              echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=upload';</script>";
            } else {
              echo "<script>alert('".$dbconnect->error."'); window.location.href='?module=listpegawai';</script>";
            }
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>

