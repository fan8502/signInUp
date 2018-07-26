<!DOCTYPE html>
<html>
<head>
	<title>MEMBER_DATA</title>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function check()
		{
		if(confirm("確實要刪除嗎?"))
			alert("已經刪除！");
		else
			return false;
		}	
	</script>
	<script>
	//newdata為使用者輸入的資料
			$(document).ready(function(){
				$("#btn_n").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata"/> <input type="button" id="newbutton" value="送出" onclick="deltxt()"></div>');});
				$("#btn_p").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_p()"></div>');});
				$("#btn_e").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_e()"></div>');});
				$("#btn_b").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_b()"></div>');});
				$("#btn_s").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_s()"></div>');});
				$("#btn_y").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_y()"></div>');});
				$("#btn_sp").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata" /> <input type="button" id="newbutton" value="送出" onclick="deltxt_sp()"></div>');});
				$("#btn_web").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata" placeholder="yes or no"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_web()"></div>');});
				$("#btn_web2").click(function () {
    				$("#showBlock").append('<div>輸入 : <input type="text" name="newdata" id="newdata" placeholder="yes or no"/> <input type="button" id="newbutton" value="送出" onclick="deltxt_web2()"></div>');});
			});
	</script>
	<script type="text/javascript">   
	//每個函式傳送帳戶原始資料.使用者輸入資料.按鈕號碼三個連接變量
		function deltxt() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_n+"&id="+newdata+"&index=1";
				alert("修改完成，請重新登入");}
		function deltxt_p() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_p+"&id="+newdata+"&index=2";
				alert("修改完成，請重新登入");}
		function deltxt_e() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_e+"&id="+newdata+"&index=3";
				alert("修改完成，請重新登入");}
		function deltxt_b() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_b+"&id="+newdata+"&index=4";
				alert("修改完成，請重新登入");}
		function deltxt_s() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_s+"&id="+newdata+"&index=5";
				alert("修改完成，請重新登入");}
		function deltxt_y() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_y+"&id="+newdata+"&index=6";
				alert("修改完成，請重新登入");}
		function deltxt_sp() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_sp+"&id="+newdata+"&index=7";
				alert("修改完成，請重新登入");}
		function deltxt_web() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_web+"&id="+newdata+"&index=8";
				alert("修改完成，請重新登入");}
		function deltxt_web2() {
				var newdata=$("#newdata").val();
				location.href = "in.php?account="+data_web2+"&id="+newdata+"&index=9";
				alert("修改完成，請重新登入");}
	</script>
</head>
<body>
	
<?php
	$account=$_POST['account'];
	$pw=$_POST['pw'];

	$_SESSION['account']=$account;
	$_SESSION['pw']=$pw;

	$link = mysqli_connect("localhost","fan8502","8502") or die("connect fail");
	mysqli_select_db($link,"register")or die ("connect fail");

	$sql = "SELECT * FROM member where account='$account' and password='$pw'";
	$result = mysqli_query($link,$sql)or die ("fail");
	$row = mysqli_fetch_row($result);

	//echo row中的使用者傳統資料成js變數var讓script可以取用
	echo "<script>var data_n='".$row[2]."';</script>";
	echo "<script>var data_p='".$row[3]."';</script>";
	echo "<script>var data_e='".$row[4]."';</script>";
	echo "<script>var data_b='".$row[5]."';</script>";
	echo "<script>var data_s='".$row[6]."';</script>";
	echo "<script>var data_y='".$row[7]."';</script>";
	echo "<script>var data_sp='".$row[8]."';</script>";
	echo "<script>var data_web='".$row[9]."';</script>";
	echo "<script>var data_web2='".$row[10]."';</script>";


	if ($_SESSION['account']==$row[0] && $_SESSION['pw']==$row[1]) {
		echo "<script>alert('登入成功!');</script>";
	}
	else{
		echo "<script>alert('帳號或密碼錯誤，請從新登入');
			location.href = 'http://localhost/signin.html';</script>";
	}
	mysqli_close($link);

?>
	<table style="width:50%">
	<tr>
		<td>帳號</td>
		<td><?php echo $row[0];?></td>
	</tr>
	<tr>
		<td>密碼</td>
		<td><?php echo $row[1];?></td>
	</tr>
	<tr>
		<td>姓名</td>
		<td><?php echo $row[2];?></td>
		<td><a href="del.php?id=<?php echo $row[2];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_n" value="修改資料" /></td>
		
	</tr>
	<tr>
		<td>電話</td>
		<td><?php echo $row[3];?></td>
		<td><a href="del.php?id=<?php echo $row[3];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_p" value="修改資料" /></td>
		
	</tr>
	<tr>
		<td>信箱</td>
		<td><?php echo $row[4];?></td>
		<td><a href="del.php?id=<?php echo $row[4];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_e" value="修改資料" /></td>
	</tr>
	<tr>
		<td>生日</td>
		<td><?php echo $row[5];?></td>
		<td><a href="del.php?id=<?php echo $row[5];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_b" value="修改資料" /></td>
	</tr>
	<tr>
		<td>SKYPE</td>
		<td><?php echo $row[6];?></td>
		<td><a href="del.php?id=<?php echo $row[6];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_s" value="修改資料" /></td>
	</tr>
	<tr>
		<td>畢業年度</td>
		<td><?php echo $row[7];?></td>
		<td><a href="del.php?id=<?php echo $row[7];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_y" value="修改資料" /></td>
	</tr>
	<tr>
		<td>喜好運動</td>
		<td><?php echo $row[8];?></td>
		<td><a href="del.php?id=<?php echo $row[8];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_sp" value="修改資料" /></td>
	</tr>
	<tr>
		<td>常用社群:FB</td>
		<td><?php echo $row[9];?></td>
		<td><a href="del.php?id=<?php echo $row[9];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_web" value="修改資料" /></td>
	</tr>
	<tr>
		<td>常用社群:IG</td>
		<td><?php echo $row[10];?></td>
		<td><a href="del.php?id=<?php echo $row[10];?>" onClick="return check();">刪除資料</a></td>
		<td><input type="button" id="btn_web2" value="修改資料" /></td>
	</tr>
	</table>
	<input type ="button" onclick="javascript:location.href='http://localhost/index.html'" value="登出"></input>
	<div id="showBlock"></div>
</body>
</html>
