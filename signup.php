<?php
	$account=$_POST['account'];
	$pw=$_POST['pw'];
	$name=$_POST['inputname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$bir=$_POST['bir'];
	$skype=$_POST['skype'];
	$year=$_POST['year'];
	$sport=$_POST['sport'];
	$mem_web=$_POST['web'];
	$mem_fb="";
	$mem_ig="";


	/*if($mem_web[0]=="fb"){
 				$mem_fb=$mem_web[0];
 				$mem_ig="no";
 				
 			}else{
 				$mem_ig=$mem_web[0];
 				$mem_fb="no";
 			}
	if (isset($mem_web[1])) {
		$mem_fb=$mem_web[0];
		$mem_ig=$mem_web[1];
	}*/
	if($mem_web[0]=="fb"){
 				$mem_fb="yes";
 				$mem_ig="no";
 				
 			}else{
 				$mem_ig="yes";
 				$mem_fb="no";
 			}
	if (isset($mem_web[1])) {
		$mem_fb="yes";
		$mem_ig="yes";
	}

	//foreach( $_POST["web"] as $val){}
	//$val =implode(",",$_POST['web']);//把web陣列用implode函式用逗號分隔成字串存入資料庫

	$link = mysqli_connect("localhost","fan8502","8502") or die("connect fail");
	mysqli_select_db($link,"register")or die ("connect fail");

	$sql = "INSERT INTO member (account,password,name,phone,email,bir,skype,year,sport,fb,ig) VALUES ('$account','$pw','$name','$phone','$email','$bir','$skype','$year','$sport','$mem_fb','$mem_ig')";

	$result = mysqli_query($link,$sql)or die ("fail"); 


	mysqli_close($link);

	header( "location:index.html");
?>
