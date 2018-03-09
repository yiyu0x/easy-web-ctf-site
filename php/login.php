<?php
	$username = $_POST['username'];
	$passwd = $_POST['password'];
	if($username=="admin" && md5($passwd)=="0e509367213418206700842008763514"){
		echo "y0u Ar3 a HaCK3R".'<br>'.'<br>';
		system("cat flag_md5.txt");
	}else{
		echo "username or password is wrong"."<br>";
		echo "please come back";
	}
?>
