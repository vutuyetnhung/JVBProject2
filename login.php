<?php
	
	include 'connect.php';
	if (isset($_POST['login'])) {
		$username = $_POST["usern"];
		$password = $_POST["passw"];
		$sql="SELECT * from user_tbl where username = '$username' and password = '$password' ";
		$result = $conn->query($sql);
	//print_r($result->fetch_assoc());
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
			if ($num_rows==1) {
   				session_start();
   				$_SESSION['id_login'] = $result->fetch_assoc()['user_id'];
				 // print_r($_SESSION);
				header('location: profile.html');
			}else{
				echo "đăng nhập k thành công";
				//header ('location: logout.php');
			}
	}
	// echo "Username vừa nhập là: ".$_POST['usern'] ;
	// echo "</br>Password  vừa nhập là: ".$_POST['passw']."<br>" ;
	
	
  // if(isset($_SESSION['username'])) { // if already login
   //header("location: logout.html"); // send to home page
   //exit; 

//	$account_id = $_POST['usern'];
/*	$partten = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
	//$partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
	$partpass = "/^[A-Z][a-zA-Z0-9]*$/";
	$password = $_POST['passw'];
	if (preg_match($partten,$account_id, $matches)) {
		echo "email OK<br>";

	}else{
		echo "email NG<br>";
	}
	if (preg_match( $partpass,$password,$matches)) {
		echo "pass OK<br>";
	}else{
		echo "pass NG<br>";
	}*/


	
// if(!isset($_POST['submit'])) { // if the form not yet submitted
//    header("Location: logout.html");
//    exit; 
// }

	// $sql="SELECT * from user_tbl where username = '$username' and password = '$password' ";
	// $result = $conn->query($sql);
	// //print_r($result->fetch_assoc());
	// $query = mysqli_query($conn,$sql);
	// $num_rows = mysqli_num_rows($query);
	// 		if ($num_rows==1) {
 //   				session_start();
 //   				$_SESSION['id_login'] = $result->fetch_assoc()['user_id'];
	// 			// print_r($_SESSION);
	// 			header('location: profile.html');
	// 		}else{
	// 			echo "đăng nhập k thành công";
	// 			//header ('location: logout.php');
	// 		}
	/*$ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $ketnoi['dbname'] = 'bbsdbp'; //Đây là tên của Database
    $ketnoi['username'] = 'root'; //Tên sử dụng Database
    $ketnoi['password'] = '';//Mật khẩu của tên sử dụng Database
    @mysql_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}")
    or
        die("Không thể kết nối database");
    @mysql_select_db(
        "{$ketnoi['dbname']}") 
    or
        die("Không thể chọn database");
*/


       
?>