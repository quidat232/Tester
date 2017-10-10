<h3 class="content-block-title"> Statistic</h3>
<?php
	$ketqua = mysql_query("SELECT luot FROM luot");
	$rows = mysql_fetch_array($ketqua);
	$page_views = $rows['luot'];
	if (empty($page_views))
	{
		$page_views = "1";
         mysql_query("INSERT INTO luot (luot)VALUES('1')");
	}
	$page_views++;
	mysql_query("UPDATE luot SET luot = $page_views");
?>
<div class="border_h2">
	<div class="thong_ke" style="height: 22px; width: auto; padding-top: 5px; border-bottom: 1px solid #f3c0ff;">
		<p class="top_song1">&nbsp;&nbsp;Total views: <strong><?php echo "$page_views "; ?></strong></p>
	</div>
<?php
$session=session_id();
$time=time();
$time_check=$time-600;
$sql="SELECT * FROM user_online WHERE session='$session'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count=="0"){
$sql1="INSERT INTO user_online(session, time)VALUES('$session', '$time')";
$result1=mysql_query($sql1);
}
else {
"$sql2=UPDATE user_online SET time='$time' WHERE session = '$session'";
$result2=mysql_query($sql2);
}
$sql3="SELECT * FROM user_online";
$result3=mysql_query($sql3);
$count_user_online=mysql_num_rows($result3);
?>

	<div class="thong_ke" style="height: 22px; width: auto; padding-top: 5px; border-bottom: 1px solid #f3c0ff;">
		<p class="top_song1">&nbsp;&nbsp;Users online: <strong><?php echo "$count_user_online "; ?></strong></p>
	</div>

<?php
// Nếu truy cập hơn 10 phút thì delete session
$sql4="DELETE FROM user_online WHERE time<$time_check";
$result4=mysql_query($sql4);mysql_close();
// Xuất kết quả ra nếu mở nhiều trình duyệt và loại trừ

?>
<?php
	require"config.php";
	$sql1=mysql_query("select count(*) As sohang from baihat");
	$row=mysql_fetch_array($sql1);
	{
?>



	<div class="thong_ke" style="height: 22px; width: auto; padding-top: 5px; border-bottom: 1px solid #f3c0ff;">
		<p class="top_song1">&nbsp; Total songs : <strong><?php echo $row['sohang']; }?></strong></p>
	</div>
<?php
    require"config.php";
	$sql1=mysql_query("select count(*) As sohang from user");
	$row=mysql_fetch_array($sql1);
	{
?>
	<div class="thong_ke" style="height: 40px; width: auto; padding-top: 5px;">
		<p class="top_song1">&nbsp; Members : <strong><?php echo $row['sohang']; }?></strong></p>

		<p class="top_song1" style=" padding-top: 5px;">&nbsp; + Newest member: <strong>
<?php
    require"config.php";
	$sql1=mysql_query("select * from user order by id desc limit 1");
	while($row=mysql_fetch_array($sql1))
	{
?>
			<a title="thành viên <?php echo $row['username']; ?>"><?php echo $row['username']; }?></strong>
			</a>
		</p></a>
	</div>
</div>
</div>
