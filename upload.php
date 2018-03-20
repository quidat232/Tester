<?php
	session_start();
	include("config.php");
	if(!isset($_SESSION['u_id']))
	{
		header('location:index.php');
	}
	$sql=mysql_query("select * from baihatmoi");
	$row=mysql_fetch_array($sql);
		if(isset($_POST['up']))
		{
			$tenbaihat=$_POST['tenbaihat'];
			$casy=$_POST['casy'];
			$album=$_POST['album'];
			$theloai=$_POST['theloai'];
			$file_name=$_FILES['upload']['name'];
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
				$dest='upload/'.$_FILES['upload']['name'];
				if(copy($source,$dest)==true)
				{
					$update=mysql_query("insert into baihatmoi(tenbaihat,casy,album,theloai,duongdan) values('$tenbaihat','$casy','$album','$theloai','$dest')");
					if($update)
					{
						echo "Your song is now waiting to be verified by admin. Back to <a href='index.php'>Homepage</a><br />Note: Your song won't be available if admin doesn't verify !!";
					}
					else
					{
						echo "Upload failed! Back to <a href='./?mod=upload'>Upload</a>";
					}
				}
				else
				{
					echo "Upload failed! Back to <a href='./?mod=upload'>Upload</a>";
				}
			}
			else
			echo "File format is not mp3! Back to <a href='./?mod=upload'>Upload</a>";
		}
		else
		{

?>
<div id="dangky_thanhvien">
	<div class="content-block album">
		<h2 class="content-block-title"> Upload song</h2>
	</div>
	<div class="thongtin_dangky">
		<div style="padding: 10px;">
			<form name="form1" method="post" enctype="multipart/form-data" action="">
				<table width="825" height="201" border="0">
					<tr>
						<td width="301" align="center" valign="top">
						<p>
							<input class="btup" type="file" name="upload" id="upload">
						</p>
						<table width="277" border="0">
						  <tr>
						    <td width="89" height="30" align="right"><b>Song name:</b></td>
						    <td width="172"><label for="tenbaihat"></label>
					        <input type="text" name="tenbaihat" id="tenbaihat" height="100px"/></td>
					      </tr>
						  <tr>
						    <td height="30" align="right"><b>Artist:</b></td>
						    <td><label for="casy"></label>
					        <input type="text" name="casy" id="casy" /></td>
					      </tr>
							<tr>
								 <td height="30" align="right"><b>Album:</b></td>
								 <td><label for="album"></label>
									 <input type="text" name="album" id="album" /></td>
							</tr>
						  <tr>
						    <td height="30" align="right"><b>Genre:</b></td>
						    <td><label for="theloai"></label>
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
							</td>
					      </tr>
						  </table>
						<p>
							<input class="btup" type="submit" name="up" value="Upload">
						</p>
						</td>
	          <td width="36" valign="top">&nbsp;</td>
						<td width="474" valign="top">

							<div>
								<strong>How to advoid errors:</strong>
							</div>
							<ul>
					            <li>- Song name MUST NOT have artist name on it.</li>
					            <li>- MP3 Format Only.</li>
			        </ul>
							<div>
							<br/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<?php
 }?>
