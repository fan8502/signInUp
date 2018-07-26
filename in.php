<?php
	
	$id = $_GET['id'];
	$account = $_GET['account'];
	$index = $_GET['index'];
	$link = mysqli_connect("localhost","fan8502","8502") or die("connect fail");
	mysqli_select_db($link,"register")or die ("connect fail");

	if ($index=='1') {
		mysqli_query($link,"UPDATE member SET name='".$id."' where name='".$account."' ")or die ("fail");}

	if ($index=='2') {
		mysqli_query($link,"UPDATE member SET phone='".$id."' where phone='".$account."' ")or die ("fail");}

	if ($index=='3') {
		mysqli_query($link,"UPDATE member SET email='".$id."' where email='".$account."' ")or die ("fail");}

	if ($index=='4') {
		mysqli_query($link,"UPDATE member SET bir='".$id."' where bir='".$account."' ")or die ("fail");}

	if ($index=='5') {
		mysqli_query($link,"UPDATE member SET skype='".$id."' where skype='".$account."' ")or die ("fail");}

	if ($index=='6') {
		mysqli_query($link,"UPDATE member SET year='".$id."' where year='".$account."' ")or die ("fail");}

	if ($index=='7') {
		mysqli_query($link,"UPDATE member SET sport='".$id."' where sport='".$account."' ")or die ("fail");}

	if ($index=='8') {
		mysqli_query($link,"UPDATE member SET fb='".$id."' where fb='".$account."' ")or die ("fail");}

	if ($index=='9') {
		mysqli_query($link,"UPDATE member SET ig='".$id."' where ig='".$account."' ")or die ("fail");}
	
	mysqli_close($link);

	header( "location:signin.html");
?>