<?php
	include("config.php");
?>
<div class="box w_1">
	<h1>Album<br class="clr"></h1>
	<div class="padding">
		<ul>
            <?php
							 $menu=mysql_query("select noidung from album ORDER BY noidung ASC limit 10");
							 if(mysql_num_rows($menu)>0)
							 {
								while($row=mysql_fetch_array($menu))
								{
							?>
								<li><a href="./?mod=album&tenab=<?php echo $row['noidung'];?>"><?php echo $row['noidung'];?></a></li>
							<?php
							}
							}
							?>
		</ul>
	</div>
</div>
<div class="box w_1">
	<h1>Artists</h1>
	<div class="padding">
		<ul>
            <?php
							 $menu=mysql_query("select casy from casy order by casy asc limit 10");
							 if(mysql_num_rows($menu)>0)
							 {
								while($row=mysql_fetch_array($menu))
								{
							?>
								<li><a href="./?mod=bhcasy&ten=<?php echo $row['casy'];?>"><?php echo $row['casy'];?></a></li>
							<?php
							}
							}
							?>
		</ul>
	</div>
</div>
