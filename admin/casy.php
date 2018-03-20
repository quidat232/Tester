<?php
	session_start();
	include("config.php");
?>
<div class="breadLine">
	<ul class="breadcrumb">
		<li><a href="#">Admin CP</a> <span class="divider">></span></li>
		<li class="active">Artist</li>
	</ul>
</div>
<?php

	if(isset($_SESSION['idadmin']))
	{
		if($_POST['ok'])
		{
			$casy=$_POST['casy'];
			$sql=mysql_query("select * from casy where casy='$casy'");
			$row=mysql_num_rows($sql);
			if($row!=0)
			{
				echo '<script type="text/javascript"> alert("AL"); </script>';
			}
			else
			{
				mysql_query("insert into casy(casy) values('$casy')");
				echo 'Đã thêm ca sỹ: <b>'.$casy.'</b> vào CSDL';
			}
		}

?>
<div class="workplace">
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Add Artist</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span2">Artist name:</div>
				<div class="span6">
					<input type="text" name="casy"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Add" name="ok"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="reset" value="Redo" onClick="return confirm('Redo ?');"></td>
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
			$casycu=$_POST['casycu'];
			$casymoi=$_POST['casymoi'];
			$sql=mysql_query("select * from casy where casy='$casymoi'");
			$row=mysql_num_rows($sql);
			if($row!=0)
			{
				echo '<script type="text/javascript"> alert("Artist already exists"); </script>';
			}
			else
			{
				$update= mysql_query("update casy set casy='$casymoi' where id IN ($casycu)");
				echo '<b>Successfully edited</b>';
			}
		}
		if($_POST['no'])
		{
			$casycu=$_POST['casycu'];
			if($casycu=="")
			{
				echo '<script type="text/javascript"> alert("No Artist Left"); </script>';
			}
			else
			{
				mysql_query("DELETE FROM casy WHERE id IN($casycu)");
				echo '<b>Successfully deleted </b>';
			}
		}
	?>
	<form method="post" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-target"></div>
				<h1>Edit and Delete Artist</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span3">Old Artist:</div>
				<div class="span6">
					<select name="casycu" id="s2_1" style="width: 100%;">
						<?php
							$luachon=mysql_query("select * from casy");
							while($row=mysql_fetch_array($luachon))
							{
						?>
							<option value="<?php echo $row['id']?>"> <?php echo $row['casy']?></option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span3">New Artist:</div>
				<div class="span6">
					<input type="text" name="casymoi"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<table width="348" border="0">
					<tr>
						<td width="127px"><input class="btn btn-large" type="submit" value="Edit" name="sua"></td>
						<td width="8">&nbsp;</td>
						<td width="127"><input class="btn btn-large" type="submit" value="Delete" onClick="return confirm('Delete this artist ?');" name="no"></td>
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
