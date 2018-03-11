
<?php
	$db_ip="localhost";
	$db_account="newuser";
	$db_passwd="123";
	$db_name="my_db";

	$username=$_POST['username'];
	$userpasswd=$_POST['passwd'];

	$db_link=@mysqli_connect($db_ip,$db_account,$db_passwd,$db_name);
	if(mysqli_connect_errno()){
		die("資料庫連線失敗<br>");
	}else{
		echo"資料庫連線成功<br>";
	}


	


		
    //然後選擇資料庫
    $seldb=mysql_select_db($db_name) or die("DB connection failed!");
    $sql="select * from accout where name = {$username}";     
    //進行撈資料
    $result=mysql_query($sql);
    //把撈出來的資料讀取出來
    $row_result=mysql_fetch_assoc($result);
    //如果表單中的名稱是有值的
    if(isset($username))
    {
        //將讀取出來的資料取出欄位名稱為username的資料，並且存在$admin
        $admin=$row_result["username"];
        if($username==$admin)
        {
            echo "歡迎".$_POST["username"]." 登入(參數傳遞)"."<br><span style="font-size: 12pt;">";
        }
    }
?>
