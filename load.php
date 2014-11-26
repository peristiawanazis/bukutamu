<?php
include('db/koneksi.php');
$check = mysql_query("SELECT * FROM user order by id_user desc");
if(isset($_POST['content']))
{
	$w=mysql_fetch_array($check);
$content=mysql_real_escape_string($_POST['content']);
$ip=mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
$a = $row['id_user'];
mysql_query("insert into user(id_user,username, nama_user, lain) values ('','$content', 'aa', 'a')");
$fetch= mysql_query("SELECT username FROM user");
$row=mysql_fetch_array($fetch);
$msg=$r['username'];


}
?>

<li>
<div align="left">
<span ><?php echo $msg; ?> </span>
</div>
</li>
