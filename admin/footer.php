<?php
	session_start();
	include("config.php");
?>

        <div class="breadLine">
            <ul class="breadcrumb">
                <li><a href="#">Admin CP</a> <span class="divider">></span></li>
                <li class="active">Footer</li>
            </ul>
        </div>
  <?php
	if(isset($_SESSION['idadmin']))
	{

		if($_POST['ok'])
		{
			$id=$_POST['id'];
			$footer=$_POST['footer'];
			$update=mysql_query("UPDATE  footer SET noidung='$footer' where id='$id'");
			if($update)
			{
				echo "Successfully Updated";
			}
			else
				echo "Update Fail";
		}
		$footer=mysql_query("select * from footer where id='1'");
		if(mysql_num_rows($footer))
		{
			$row=mysql_fetch_array($footer);
?>
		<form method="post" action="">
        <div class="workplace">

            <div class="row-fluid">

                <div class="span12">
                    <div class="head">
                        <div class="isw-favorite"></div>
                        <h1>Footer</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid" id="wysiwyg_container">
                        <textarea id="wysiwyg" name="footer" style="height:300px;"><?php echo $row['noidung'];?></textarea>
                        <div class="clear"></div>
                    </div>

                </div>

					<table width="348" border="0">
						<tr>
                            <td width="127"><input class="btn btn-large" type="submit" value="Update" onClick="return confirm('Update the running text ?');" name="ok" ></td>
							<td width="127"><input type="hidden" name="id" value="<?php echo $row['id'];?>" /></td>
							<td width="127"><input class="btn btn-large" type="reset" value="Redo" onClick="return confirm('Start Over?');"></td>
						</tr>
					</table>
            </div>

            <div class="dr"><span></span></div>
		</div>
		</form>

<?php } } ?>
