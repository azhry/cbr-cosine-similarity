<?php
$page = (isset($_GET['page']))? $_GET['page'] : 1;
                    
                    $limit = 3; // Jumlah data per halamannya
                    
                    // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
                    $limit_start = ($page - 1) * $limit;

$a="SELECT * FROM explicit join user on explicit.NIP=user.nip where explicit.validasi='Valid' order by explicit.id_explicit desc LIMIT ".$limit_start.",".$limit;
$query=mysqli_query($dbconnect,$a);
$no = $limit_start + 1; // Untuk penomoran tabel
?>
<!-- Basic Card Example -->
<h2>Explicit Knowledge</h2>

<div class="row">
<?php
while ($data = mysqli_fetch_array($query)){
?>
            <div class="col-lg-12">

              <div class="card shadow mb-2">
                <div class="card-header py-3">
                  <i class="fas fa-user fa-right"></i> <span><?php echo $data['nama']; ?> (NIP : <?php echo $data['nip']; ?>)</span>
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['judul']; ?></h6>
                </div>
                <div class="card-body">
                  <?php echo $data['isi_explicit']; ?>
                  <br><br>
                  File : <?php echo $data['nama_file']; ?> <a target="blank" href="<?php echo $data['file']; ?>"> Download</a>

                </div>
                <div class="card-header py-3">
                <a href="?module=komentar_explicit&id_explicit=<?php echo $data['id_explicit'];?>">  
                  <i class="fas fa-comments fa-2x text-blue-300"></i> 
                </a>
                <span><?php echo getComment1($data['id_explicit']); ?> Komentar</span>
                <?php if (userLiked1($data['id_explicit'],$_SESSION['user_id']) != $_SESSION['user_id']) {?>
                <a href="?module=unlike_explicit&id_explicit=<?php echo $data['id_explicit'];?>&user_id=<?php echo $_SESSION['user_id'];?>"> 
                  <i class="fas fa-thumbs-down fa-2x text-blue-300"></i>
                </a>
                <?php } else {?>
                <a href="?module=like_explicit&id_explicit=<?php echo $data['id_explicit'];?>&user_id=<?php echo $_SESSION['user_id'];?>">  
                  <i class="fas fa-thumbs-up fa-2x text-blue-300"></i>
                </a>
                <?php } ?>
                 <span><?php echo getLikes1($data['id_explicit']); ?> Likes</span>
                </div>
              </div>

          </div>
<?php }?>          
      </div>

<ul class="pagination">
                <!-- LINK FIRST AND PREV -->
                <?php
                if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
                ?>
                    <li class="disabled"><a href="#">First</a></li>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                <?php
                }else{ // Jika page bukan page ke 1
                    $link_prev = ($page > 1)? $page - 1 : 1;
                ?>
                    <li><a href="?module=explicitumum&page=1">First</a></li>
                    <li><a href="?module=explicitumum&page=<?php echo $link_prev; ?>">&laquo;</a></li>
                <?php
                }
                ?>
                
                <!-- LINK NUMBER -->
                <?php
                // Buat query untuk menghitung semua jumlah data
                $sql2 = mysql_query("SELECT COUNT(*) AS jumlah FROM explicit ");
                $get_jumlah = mysql_fetch_array($sql2);
                
                $jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
                $jumlah_number = 2; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
                $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
                
                for($i = $start_number; $i <= $end_number; $i++){
                    $link_active = ($page == $i)? ' class="active"' : '';
                ?>
                    <li<?php echo $link_active; ?>><a href="?module=explicitumum&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php
                }
                ?>
                
                <!-- LINK NEXT AND LAST -->
                <?php
                // Jika page sama dengan jumlah page, maka disable link NEXT nya
                // Artinya page tersebut adalah page terakhir 
                if($page == $jumlah_page){ // Jika page terakhir
                ?>
                    <li class="disabled"><a href="#">&raquo;</a></li>
                    <li class="disabled"><a href="#">Last</a></li>
                <?php
                }else{ // Jika Bukan page terakhir
                    $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                ?>
                    <li><a href="?module=explicitumum&page=<?php echo $link_next; ?>">&raquo;</a></li>
                    <li><a href="?module=explicitumum&page=<?php echo $jumlah_page; ?>">Last</a></li>
                <?php
                }
                ?>
            </ul>      