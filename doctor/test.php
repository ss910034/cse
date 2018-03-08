<?php 
include("connectVar.php");

if(isset($_GET['user']))
{
	$name=$_GET['user'];
}
if (isset($_GET['tel'])) {
	$tel=$_GET['tel'];
}
if (isset($_GET['other'])) {
	$other=$_GET['other'];
}
echo $name." ".$tel." ".$other;
?>


<form action="ttest.php" method="get" >
	<input type="text" name="user">
	<input type="submit" name="submit" value="submit">
</form>
<?php
$sql="insert into newtable(name,tel,other)values('".$name."','".$tel."','".$other."')";
$result=$conn->query($sql);
?>
<br>
action -> to where <br>
method -> get/post <br>
post-> 在action的頁面接收 <br>
get-> show 在網址上 <br>