<?php 

include"koneksi.php";

// Get total number of comment for a particular post
function getComment($id)
{
  global $dbconnect;
  $sql = "SELECT COUNT(*) FROM komentar_tacit 
        WHERE id_tacit = $id";
  $rs = mysqli_query($dbconnect, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of comment for a particular post
function getComment1($id)
{
  global $dbconnect;
  $sql = "SELECT COUNT(*) FROM komentar_explicit 
        WHERE id_explicit = $id";
  $rs = mysqli_query($dbconnect, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Get total number of likes for a particular post
function getLikes($id)
{
  global $dbconnect;
  $sql = "SELECT COUNT(*) FROM like_tacit 
        WHERE id_tacit = $id";
  $rs = mysqli_query($dbconnect, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Check if user already likes post or not
function userLiked($id_tacit,$user_id)
{
  global $dbconnect;
  $sql = "SELECT * FROM like_tacit WHERE user_id=$user_id 
        AND id_tacit=$id_tacit";
  $result = mysqli_query($dbconnect, $sql);
  $number = mysqli_num_rows($result);
  if($number > 0)
  {
  	return false;
  }
  else
  {
  	return true;
  }
}

// Get total number of likes for a particular post
function getLikes1($id)
{
  global $dbconnect;
  $sql = "SELECT COUNT(*) FROM like_explicit 
        WHERE id_explicit = $id";
  $rs = mysqli_query($dbconnect, $sql);
  $result = mysqli_fetch_array($rs);
  return $result[0];
}

// Check if user already likes post or not
function userLiked1($id_explicit,$user_id)
{
  global $dbconnect;
  $sql = "SELECT * FROM like_explicit WHERE user_id=$user_id 
        AND id_explicit=$id_explicit";
  $result = mysqli_query($dbconnect, $sql);
  $number = mysqli_num_rows($result);
  if($number > 0)
  {
  	return false;
  }
  else
  {
  	return true;
  }
}

?>