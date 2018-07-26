<?php
	
	$id = $_GET['id'];
	$link = mysqli_connect("localhost","fan8502","8502") or die("connect fail");
	mysqli_select_db($link,"register")or die ("connect fail");

	$sqln = "UPDATE member SET name='NULL' where name='".$id."' ";
	$sqlp = "UPDATE member SET phone='NULL' where phone='".$id."' ";
	$sqle = "UPDATE member SET email='NULL' where email='".$id."' ";
	$sqlb = "UPDATE member SET bir='NULL' where bir='".$id."' ";
	$sqls = "UPDATE member SET skype='NULL' where skype='".$id."' ";
	$sqly = "UPDATE member SET year='NULL' where year='".$id."' ";
	$sqlsp = "UPDATE member SET sport='NULL' where sport='".$id."' ";
	$sqlweb = "UPDATE member SET fb='no' where fb='".$id."' ";
	$sqlweb2 = "UPDATE member SET ig='no' where ig='".$id."' ";

	mysqli_query($link,$sqln)or die ("fail"); 
	mysqli_query($link,$sqlp)or die ("fail");
	mysqli_query($link,$sqle)or die ("fail");
	mysqli_query($link,$sqlb)or die ("fail");
	mysqli_query($link,$sqls)or die ("fail");
	mysqli_query($link,$sqly)or die ("fail");
	mysqli_query($link,$sqlsp)or die ("fail");
	mysqli_query($link,$sqlweb)or die ("fail");
	mysqli_query($link,$sqlweb2)or die ("fail");

	mysqli_close($link);

	header( "location:signin.html");
?>