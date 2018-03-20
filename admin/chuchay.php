<?php
	session_start();
	include("config.php");
?>

        <div class="breadLine">
            <ul class="breadcrumb">
                <li><a href="#">Admin CP</a> <span class="divider">></span></li>
                <li class="active">Running Text</li>
            </ul>
        </div>
  <?php
	if(isset($_SESSION['idadmin']))
	{

		if($_POST['ok'])
		{
			$id=$_POST['id'];
			$chuchay=$_POST['chuchay'];
			$update=mysql_query("UPDATE chuchay SET noidung='$chuchay' where id='$id'");
			if($update)
			{
				echo "Successfully Updated";
			}
			else
				echo "Update Failed";
		}
		$chuchay=mysql_query("select * from chuchay where id='1'");
		if(mysql_num_rows($chuchay))
		{
			$row=mysql_fetch_array($chuchay);


?>
        <div class="workplace">

            <div class="row-fluid">
                <form method="post" action="">
                <div class="span12">
                    <div class="head">
                        <div class="isw-documents"></div>
                        <h1>Running Text</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">
                        <div class="row-form">
                            <div class="span3">Running text:</div>
                            <div class="span9"><textarea name="chuchay" placeholder="Edit the running text here..."><?php echo $row['noidung'];?></textarea></div>
                            <div class="clear"></div>
                        </div>
                        <table width="348" border="0" align="center">
						<tr>
                            <td width="127"><input class="btn btn-large" type="submit" value="Update" onClick="return confirm('Update the running text ?');" name="ok" ></td>

							<td width="127"><input type="hidden" name="id" value="<?php echo $row['id'];?>" /></td>
							<td width="127"><input class="btn btn-large" type="reset" value="Redo" onClick="return confirm('Start over ?');"></td>
						</tr>
					</table>
                    </div>

                </div>
				</form>

            </div>
            <div class="dr"><span></span></div>
		</div>

<?php } } ?>
