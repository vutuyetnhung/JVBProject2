<?php 
	$conn = mysqli_connect("localhost","root","","bbdsdbp");
	if(!$conn){
		echo "Ket noi that bai".mysqli_connect_error();
	}
	else{
		echo "Ket noi thanh cong<br>";
	}
?>