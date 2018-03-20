	<div class="breadLine">

            <ul class="breadcrumb">
                <li><a href="#">Admin CP</a> <span class="divider">></span></li>
                <li class="active">Posted Songs</li>
            </ul>
	</div>
	<?php
		if(isset($_SESSION['idadmin']))
		{
			if($_POST['sua'])
			{
				$checkbox=$_POST['checkbox'];
				$tenbaihat=$_POST['tenbaihat'];
				$casy=$_POST['casy'];
				$album=$_POST['album'];
				if($checkbox=='')
				{
					echo '<script type="text/javascript"> alert("Please select the songs!"); </script>';
				}
				else
				{
					$s_id=implode(", ", $checkbox);
					$update= mysql_query("update baihat set tenbaihat='$tenbaihat', casy='$casy', album='$album' where id IN ($s_id)");
					echo '<b>Successfully Edited</b>';
				}
			}
			if($_POST['no'])
			{
				$checkbox=$_POST['checkbox'];
				$tenbaihat=$_POST['tenbaihat'];
				if($checkbox=='')
				{
					echo '<script type="text/javascript"> alert("Please select the songs!"); </script>';
				}
				else
				{
					$del_id=implode(", ", $checkbox);
					$sql = mysql_query("DELETE FROM baihat WHERE id IN($del_id)");
					echo 'Successfully deleted';
				}
			}
	?>
        <div class="workplace">

            <div class="row-fluid">

                <div class="span12">
                    <div class="head">
                        <div class="isw-ok"></div>
                        <h1>Verified Songs</h1>
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
								$sql=mysql_query("select * from baihat");
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
                                    <td><?php echo $row['theloai']?></td>
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
                                    <td><a title="Listen to <?php echo $row['tenbaihat']; ?>" href=".././?mod=play&baihat=<?php echo $row['id'];?>">Listen</a></td>
                                </tr>
							<?php
									}
								}
							?>
                            </tbody>
                        </table>

                        <table width="348" border="0">
                          <tr>
                            <td width="127"><input class="btn btn-large" type="submit" value="Edit" onClick="return confirm('Edit the song?');" name="sua" ></td>
							<td width="12">&nbsp;</td>
                            <td width="187"><input class="btn btn-large" type="submit" value="Delete" onClick="return confirm('Delete the song?');" name="no" ></td>
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
