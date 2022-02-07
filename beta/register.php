<?php
	$email=$_POST["email"];
    $psw=$_POST["psw"];
    $psw_enc=password_hash($psw,PASSWORD_DEFAULT);
    $obj=new stdClass();
    //ciao
    $obj->email=$email;
    $obj->psw=$psw_enc;
    $json=json_encode($obj)."\n";
    $file_open=fopen("users/users.json",'r');
    $flag=0;
    while(!feof($file_open)){
    	$obj2=json_decode(fgets($file_open));
     	 if($obj2->email==$email){
        	$flag=1;
        }
    }
    fclose($file_open);
    if($flag==0){
      $file=fopen("users/users.json",'a');
      fwrite($file,$json);
      fclose($file);
      mkdir("./".$email);
    }else 
      header('Location: index.html');
    //echo "Utente già registrato";
?>