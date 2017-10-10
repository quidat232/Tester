<h1>Billboard</h1>
	<div style="padding: 10px 10px 0 10px;" id="load_bxh">
<?php
	$sql= mysql_query("select*from baihat order by luotnghe desc limit 10");
	if(mysql_num_rows($sql)>0)
	{
		$i=0;
		while($row=mysql_fetch_array($sql))
	{
	$i+=1;
?>
		<div class="top_mp3" style>
		<?php if($i>3) echo "<div class='x_1' style='background: #999;'>"; else echo "<div class='x_1' style>"; ?>
		<?php echo $i;?></div>
			<div class="x_2">
				<p class="song">
					<a href="./?mod=play&baihat=<?php echo $row['id'];?>" title="<?php echo $row['tenbaihat']; ?>"><?php echo $row['tenbaihat']; ?></a>
				</p>
				<p class="singer">
					<a href="./?mod=bhcasy&ten=<?php echo $row['casy']; ?>" title="Tìm bài hát của <?php echo $row['casy']; ?>" class=""><?php echo $row['casy']; ?></a>
				</p>
			</div>
			<div class="clr"></div>
		</div>
<?php
	}
}
?>
		<div class="clr"></div>
		<div class="read_" style="display: ">
			<a class="read-more" href="#">Xem thêm</a>
		</div>

	</div>
