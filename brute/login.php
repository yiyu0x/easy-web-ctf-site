<?php
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];

#	echo $username;
#	echo $password;

	if($username=='admin'){
		
		if($password=='0525'){
			echo "you r admin now!"."<br>";
			echo "LSA{u a3e so bruty}";
		}else{
			echo "password wrong!"."<br>";
			header("Refresh:3; url=index.html"); 
		}
	}else{
		echo "all wrong!"."<br>";
		header("Refresh:3; url=index.html"); 
	}

?>
