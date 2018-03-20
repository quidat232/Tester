<h1 id="tab_click_new_song">
   Search:
</h1>
<div id="load_new_song" style="padding: 10px;  padding-top: 0px;">
<?php
	$ten=$_GET['ten'];
	$sql=mysql_query("select* from baihat where casy='$ten'");
	while($row=mysql_fetch_array($sql))
	{
?>
	<div class="list_song" style="padding: 0px;">
		<div class="left">
			<div class="left images">
            	<img src="image/giaodien/no-img00.jpg" class="img" height="46px" width="46px">
            </div>
			<p class="song">
				<a title="Listen to <?php echo $row['tenbaihat']; ?>" href="./?mod=play&baihat=<?php echo $row['id'];?>"><?php echo $row['tenbaihat']; ?></a>
			</p>
			<p class="singer">Performed by:
				<a title="Search songs of <?php echo $row['casy']; ?>" href=""><?php echo $row['casy']; ?></a>
			</p>
			<p class="time">Genre:
				<span class="singer_">
					<a href="" title="<?php echo $row['theloai']; ?>"><?php echo $row['theloai']; ?></a>
				</span>
			</p>
		</div>
		<div class="clr">
    </div>

	</div>
<?php

		}

?>
