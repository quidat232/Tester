<h1 id="tab_click_new_song">
   Search
</h1>
	<div id="load_new_song" style="padding: 10px;  padding-top: 0px;">
<?php
	$key=$_POST['key'];
	if(isset($_POST['nuttim']))
	{
    $sqlcode= "select baihat.id as idbaihat,tenbaihat, casy, theloai, noidung
              from baihat inner join album on baihat.album = album.noidung
              where noidung like '%".$key."%' or tenbaihat like '%".$key."%' or theloai like '%".$key."%' or casy like '%".$key."%'";
		$tk=mysql_query($sqlcode);
		while($bai=mysql_fetch_array($tk))
		{
?>
	<div class="list_song" style="padding: 0px;">
		<div class="left">
			<div class="left images">
            	<img src="image/giaodien/no-img00.jpg" class="img" height="46px" width="46px">
            </div>
			<p class="song">
				<a title="Listen To <?php echo $bai['tenbaihat']; ?>" href="./?mod=play&baihat=<?php echo $bai['idbaihat'];?>"><?php echo $bai['tenbaihat']; ?></a>
			</p>
			<p class="singer">Performed by:
				<a title="Search Song Of <?php echo $bai['casy']; ?>" href=""><?php echo $bai['casy']; ?></a>
			</p>
			<p class="time">Genre:
				<span class="singer_">
					<a title="Search genre <?php echo $bai['theloai']; ?>" href=""><?php echo $bai['theloai']; ?></a>
				</span>
			</p>
		</div>
		<div class="clr">
        </div>
	</div>
<?php
		}
	}
?>
