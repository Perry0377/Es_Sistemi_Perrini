<?php session_start();
	session_cache_expire(3600);
	$email=$_POST["email"];
	$psw=$_POST["psw"]; 
    $file_open=fopen("users/users.json",'r');
    while(!feof($file_open)){
    	$obj2=json_decode(fgets($file_open));
        if($obj2->email==$email && password_verify($psw,$obj2->psw)){
            $_SESSION["email"]=$email;
         	echo "Benvenuto ".$_SESSION["email"].", sei loggato";
         }
    }
    fclose($file_open);
    header('Location: index.php');
?>