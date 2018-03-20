<?php
	session_start();
	include("config.php");
?>
<div class="breadLine">
	<ul class="breadcrumb">
		<li><a href="#">Admin CP</a> <span class="divider">></span></li>
		<li class="active">Genre</li>
	</ul>
</div>
<?php

	if(isset($_SESSION['idadmin']))
	{
		if($_POST['ok'])
		{
			$theloai=$_POST['theloai'];
			$sql=mysql_query("select * from theloai where noidung='$theloai'");
			$row=mysql_num_rows($sql);
			if($row!=0)
			{
				echo '<script type="text/javascript"> alert("Genre already exists"); </script>';
			}
			else
			{
				mysql_query("insert into theloai(noidung) values('$theloai')");
				echo '<b>'.$theloai.'</b> has been added' ;
			}
		}

?>
<div class="workplace">
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Add Genre</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span2">Genre:</div>
				<div class="span6">
					<input type="text" name="theloai"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Add" name="ok"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="reset" value="Redo" onClick="return confirm('Start Over ?');"></td>
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
			$theloaicu=$_POST['theloaicu'];
			$theloaimoi=$_POST['theloaimoi'];
			$update= mysql_query("update theloai set noidung='$theloaimoi' where id IN ($theloaicu)");
			echo '<b>Successfully Edited</b>';
		}
		if($_POST['no'])
		{
			$theloaicu=$_POST['theloaicu'];
			mysql_query("DELETE FROM theloai WHERE id IN($theloaicu)");
			echo '<b>Successfully Deleted </b>';
		}
	?>
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Edit and Delete Genre</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span3">Old genre:</div>
				<div class="span6">
					<select name="theloaicu">
						<?php
							$luachon=mysql_query("select * from theloai");
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
				<div class="span3">New genre:</div>
				<div class="span6">
					<input type="text" name="theloaimoi"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Edit" name="sua"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="submit" value="Delete" onClick="return confirm('Delete the genre?');" name="no"></td>
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
