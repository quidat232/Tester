<?php
	session_start();
	include("config.php");
?>
<div class="breadLine">
	<ul class="breadcrumb">
		<li><a href="#">Admin CP</a> <span class="divider">></span></li>
		<li class="active">Album</li>
	</ul>
</div>
<?php

	if(isset($_SESSION['idadmin']))
	{
		if($_POST['ok'])
		{
			$chude=$_POST['album'];
			$sql=mysql_query("select * from album where noidung='$chude'");
			$row=mysql_num_rows($sql);
			if($row!=0)
			{
				echo '<script type="text/javascript"> alert("Album exists"); </script>';
			}
			else
			{
				mysql_query("insert into album(noidung) values('$chude')");
				echo 'Added: <b>'.$chude.'</b> into database';
			}
		}

?>
<div class="workplace">
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Add Album</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span2">Album</div>
				<div class="span6">
					<input type="text" name="album"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Add" name="ok"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="reset" value="Redo" onClick="return confirm('Start over again');"></td>
					</tr>
				</table>
				<div class="clear"></div>
			</div>
		</div>
    </div>
	</form>
	<div class="dr"><span></span></div>
	<?php
		if($_POST['sua'])
		{
			$chudecu=$_POST['albumcu'];
			$chudemoi=$_POST['albummoi'];
			$update= mysql_query("update chude set noidung='$chudemoi' where id IN ($chudecu)");
			echo '<b>Successfully edited</b>';
		}
		if($_POST['no'])
		{
			$chudecu=$_POST['chudecu'];
			mysql_query("DELETE FROM album WHERE id IN($chudecu)");
			echo '<b>Successfully deleted </b>';
		}
	?>
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Edit and Delete Album</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span3">Old Album:</div>
				<div class="span6">
					<select name="albumcu">
						<?php
							$luachon=mysql_query("select * from album");
							while($row=mysql_fetch_array($luachon))
							{
						?>
							<option value="<?php echo $row['id']?>"> <?php echo $row['noidung']?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span3">New Album:</div>
				<div class="span6">
					<input type="text" name="albummoi"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Edit" name="sua"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="submit" value="Delete" onClick="return confirm('Delete the album?);" name="no"></td>
					</tr>
				</table>
				<div class="clear"></div>
			</div>
		</div>
    </div>
	</form>
</div>
<?php
	}
?>
