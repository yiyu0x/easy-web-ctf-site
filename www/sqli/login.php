<?php
	$db_host="mysql:3306";
	$db_user="newuser";
	$db_pass="newpassword";
	$db_name="my_db1";
	$flag = "LSA {sqli is great?!}";


		if(!empty($_POST['username']) && !empty($_POST['password'])) {
		    $connection = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $db_host, $db_name);
		    $db = new PDO($connection, $db_user, $db_pass);
		    $sql = sprintf("SELECT * FROM `account` WHERE `name` = '%s' AND `passwd` = '%s'",
		        $_POST['username'],
		        $_POST['password']
		    );
		    try {
		        $query = $db->query($sql);
		        if($query) {
		            $user = $query->fetchObject();
		        } else {
		            $user = false;
		        }
		    } catch(Exception $e) {
		        $user = false;
		    }
		}
?>
<?php if(!$user): ?>
<?php if($user === false): ?>
<?=$sql?>
<div class="alert alert-danger">login fail</div>
<?php endif; ?>
<?php else: ?>
<h3>Hi, <?=htmlentities($user->name)?></h3>
<h4><?=sprintf("You %s admin!", $user->name === "admin" ? "are" : "are not")?></h4>
<?php if($user->name === "admin") printf("%s %s", htmlentities("hello admin this is your flag :"),$flag); ?>
<?php endif; ?>
