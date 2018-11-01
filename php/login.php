<?php
header("Content-type: text/html; charset=utf-8");
 $con=mysql_connect('localhost','root','');
   mysql_select_db('myDB');
   mysql_query("set names utf-8");

   $username = $_REQUEST['username'];

   $sqlu = "select * from MyGuests where username = '$username'";
   $sqlp = "select * from MyGuests where password = '$password'";
   $query1=mysql_query($sqlu);
   $query2=mysql_query($sqlp);

   if($query1 && mysql_num_rows($query1)){
   if($query2 && mysql_num_rows($query2)){
   		echo '{"code":"0", "message" : "登录成功"}';
   		}else{
   		echo '{"code":"1","message":"密码错误"}';
   		}
   	}
   	else{
   		echo '{"code":"2" , "message" : "登录失败,无这个用户名"}';
   	}


?>

