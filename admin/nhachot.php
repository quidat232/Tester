<?php
error_reporting(E_ERROR)
?>
<?php
	session_start();
	include("config.php");
?>
<div class="breadLine">
	<ul class="breadcrumb">
		<li><a href="index.php">Admin CP</a> <span class="divider">></span></li>
		<a href="#"><li class="active">Hot Music</li></a>
	</ul>
</div>
<?php

	if(isset($_SESSION['idadmin']))
	{	$sql1=mysql_query("select * from baihathot");
		$row=mysql_fetch_array($sql1);
		if($_POST['ok'])
		{

			$tenbaihat=$_POST['tenbaihat'];
			$casy=$_POST['casy'];
			$album=$_POST['album'];
			$theloai=$_POST['theloai'];
			$file_name=$_FILES['upload']['name'];
			$extent_file="mp3";
			$pattern='#.+\.(mp3)$#i';
			if(preg_match($pattern,$file_name)==1)
			{
				$file_type=true;
			}
			else
			{
				$file_type=false;
			}
			if($file_type==true)
			{
				$source=$_FILES['upload']['tmp_name'];
				$dest='./upload/'.$_FILES['upload']['name'];
				if(copy($source,$dest)==true)
				{
					$flag=true;
					$update=mysql_query("insert into baihathot(tenbaihat,casy,album,theloai,duongdan) values('$tenbaihat','$casy','$album','$theloai','$dest')");
					if($update)
					{
						echo "Suscessfully uploaded !";
					}
					else
					{
						echo "Upload failed!";
					}
				}
				else
				{
					$flag=false;
					echo "Upload failed!";
				}
			}
			else
			{
				echo "File format must be MP3";
			}
		}
	?>
<div class="workplace">
	<form method="post" enctype="multipart/form-data" action="">
	<div class="row-fluid">
		<div class="span6">
		<div class="head">
			<div class="isw-grid"></div>
				<h1>Upload Hot Songs</h1>
			<div class="clear"></div>
		</div>
		<div class="block-fluid">
			<div class="row-form">
				<div class="span5">File Upload:</div>
				<div class="span7">
					<input type="file" name="upload" id="upload"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span5">Song name:</div>
				<div class="span6">
					<input type="text" name="tenbaihat"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span5">Artist:</div>
				<div class="span6">
					<input type="text" name="casy"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span5">Album:</div>
				<div class="span6">
					<input type="text" name="album"/>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row-form">
				<div class="span5">Genre:</div>
				<div class="span6">
					<select name="theloai">
						<?php
							$luachon=mysql_query("select * from theloai");
							while($row=mysql_fetch_array($luachon))
							{
						?>
							<option> <?php echo $row['noidung']?></option>
						<?php
							}
						?>
					</select>
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
		$checkbox=$_POST['checkbox'];
		$tenbaihat=$_POST['tenbaihat'];
		$theloai=$_POST['theloai'];
		$casy=$_POST['casy'];
		$casy=$_POST['album'];
		if($checkbox=='')
		{
			echo '<script type="text/javascript"> alert("Please select the songs!"); </script>';
		}
		else
		{
			$s_id=implode(", ", $checkbox);
			$update= mysql_query("update baihathot set tenbaihat='$tenbaihat', casy='$casy', album ='$album', theloai='$theloai' where id IN ($s_id)");
			echo '<b>Successfully edited</b>';
		}
	}
	if($_POST['no'])
		{
			$checkbox=$_POST['checkbox'];
			if($checkbox=='')
			{
				echo '<script type="text/javascript"> alert("Please select the songs!"); </script>';
			}
			else
			{
				$del_id=implode(", ", $checkbox);
				mysql_query("DELETE FROM baihathot WHERE id IN($del_id)");
				echo '<b>Successfully deleted</b>';
			}
		}
?>
	<div class="row-fluid">
		<div class="span12">
			<div class="head">
				<div class="isw-grid"></div>
				<h1>Hot Songs</h1>
				<div class="clear"></div>
			</div>
			<div class="block-fluid table-sorting">
				<form method="post" action="">
					<table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkall"/></th>
								<th width="25%">Song name</th>
								<th width="25%">Artist</th>
								<th width="25%">Album</th>
								<th width="25%">Genre</th>
								<th width="25%">Listen</th>
							</tr>
                        </thead>
						<tbody>
							<?php
								$sql=mysql_query("select * from baihathot");
								if(mysql_num_rows($sql)>0)
								{
									while($row=mysql_fetch_array($sql))
									{
							?>
							<tr>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"/></td>
								<td><input type="text" class="span12" name="tenbaihat" value="<?php echo $row['tenbaihat']; ?>"></td>
								<td><input type="text" class="span12" name="casy" value="<?php echo $row['casy']; ?>"></td>
								<td><input type="text" class="span12" name="album" value="<?php echo $row['album']; ?>"></td>
								<td><?php echo $row['theloai']; ?></td>
<script language=javascript>
function externalLinks()
{
  if (!document.getElementsByTagName) return;
  var anchors = document.getElementsByTagName("a");
  for (var i=0; i<anchors.length; i++)
  {
      var anchor = anchors[i];
      if(anchor.getAttribute("href"))
		anchor.target = "_blank";
  }
}
window.onload = externalLinks;

</script>
								<td><a title="Listen to <?php echo $row['tenbaihat']; ?>" href=".././?mod=playhot&baihat=<?php echo $row['id'];?>">Listen</a></td>
							</tr>
							<?php
									}
								}
							?>
							Genre: <select name="theloai">
										<?php
											$luachon=mysql_query("select * from theloai");
											while($row=mysql_fetch_array($luachon))
											{
										?>
											<option> <?php echo $row['noidung']?></option>
										<?php
											}
										?>
									</select>
						</tbody>
					</table>

					<table width="348" border="0">
						<tr>
              <td width="127"><input class="btn btn-large" type="submit" value="Delete" onClick="return confirm('Delete the song?');" name="no" ></td>
							<td width="127px"><input class="btn btn-large" type="submit" value="Edit" onClick="return confirm('Edit the song ?');" name="sua"></td>
							<td width="8">&nbsp;</td>
							<td width="127"><input class="btn btn-large" type="reset" value="Redo" onClick="return confirm('Start over?');"></td>
						</tr>
					</table>
					<p>&nbsp; </p>
				</form>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="dr"><span></span></div>
</div>
<?php
	}
?>
