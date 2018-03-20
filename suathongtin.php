<?php
	session_start();
	include("config.php");
	$user=$_SESSION['user_id'];
	$sql=mysql_query("select * from user where username='$user'");
	$row=mysql_fetch_array($sql);
	if(isset($_POST['edit']))
	{
	$password=$_POST['password'];
	$hoten=$_POST['hoten'];
	$email=$_POST['email'];
	$diachi=$_POST['diachi'];
	$update=mysql_query("UPDATE user set password='$password',name='$hoten',email='$email',diachi='$diachi' where username='$user'");
	if($update)
			echo "Your information has changed. Back to <a href='index.php'>homepage</a>";
	else
			echo "Error";
	}
	else
	{

?>
<div id="dangky_thanhvien">
				<div class="content-block album">
					<h2 class="content-block-title"> Edit Information</h2>
               	</div>
				<div class="thongtin_dangky">
					<div style="padding: 10px;">
            <form action="" method="POST">
							<table width="600px" border="0">
								<tr>
									<td width="100px" height="25px" valign="center" align="right">Password: </td>
									<td width="400px">
											<input type="password" name="password" value="<?php echo $row['password'];?>" style="width:300px">
								</tr>
								<tr><td height="25px" valign="center"></td>
									<td valign="center">
											<i style='font-size:13px'><em>(If you want to change password, type in the box above)</em></i>
											<br />
											<i style='font-size:13px'>(If you don't want to change password, leave it be)</i>
									</td>
								</tr>
								<tr>
									<td align="right" height="25px" valign="center">Your Name: </td>
									<td><input type="text" name="hoten" value="<?php echo $row['name'];?>" style="width:300px"></td>
								</tr>
								<tr>
									<td align="right" height="25px" valign="center">Email: </td>
									<td><input type="text" name="email" value="<?php echo $row['email'];?>" style="width:300px"></td>
								</tr><tr>
									<td align="right" height="25px" valign="center">Address: </td>
									<td><input type="text" name="diachi" value="<?php echo $row['diachi'];?>" style="width:300px"></td>
								</tr>
								<TR>
									<td colspan=2 align="center"><input class="btup" type="submit" name="edit" value="Update" id="kieunut"></td>
								</tr>
							</table>
						</form>
                </div>
			</div>
<?php }
?>
