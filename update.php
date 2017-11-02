<?php
	
	include 'connect.php';
	mysqli_set_charset($conn,'utf8');//để k lỗi font
	session_start();	// có thì ms ra dc cái sesion id_login
	$id = $_SESSION['id_login'];
	$nickname = $_POST["nickname"];
	$email = $_POST["email"];
	$fullname = $_POST["fullname"];
	$slogan = $_POST["slogan"];
	 $sql="UPDATE user_tbl set nickname = '$nickname', email = '$email',fullname = '$fullname',slogan = '$slogan' where user_id = '$id'";//in hoa update hay k thì vẫn ra

  if(mysqli_query($conn, $sql)){
      echo "Success";
      header( 'Location: profile.html' ) ;
  } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  mysqli_close($conn);



?>