<?php
error_reporting(E_ERROR)
?>
<?php
	include "config.php";
	if(isset($_POST["submit"]))
	{
	$username = addslashes($_POST["username"]);
	$password = $_POST["password"];
	$email = addslashes($_POST["email"]);
	$hoten = addslashes($_POST["hoten"]);
	$diachi =addslashes($_POST["diachi"]);
	$ngaysinh = $_POST["ngay"]."-".$_POST["thang"]."-".$_POST["nam"];
	$gioitinh =addslashes($_POST["gt"]);
	$query = "SELECT username FROM user WHERE username ='$username';";
  $result = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($result) != 0)
          {
		  $usertt="User exists !!!";
		  }
	else
	{
		if(!preg_match('/^[^@]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/', $email))
		{
		$mailer= "Email format isn't correct!";
		}

		else
		{
			$sql = "insert into user(username,password,email,name,diachi,ngaysinh,gioitinh) values('$username','$password','$email','$hoten','$diachi','$ngaysinh','$gioitinh')";
			$resual=mysql_query($sql) or die(mysql_error());
				if($resual)
				{
				$tb="Account <b>$username</b> has been created";
				}
				else
				{
					echo "";
				}
		}
	}
	}
	?>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<script language=JavaScript>
	var txt="Listen to music online - Download free high quality music              ";
	var espera=200; var refresco=null; function rotulo_title()
	{
		document.title=txt; txt=txt.substring(1,txt.length)+txt.charAt(0); refresco=setTimeout("rotulo_title()",espera);
	}
	rotulo_title();
</SCRIPT>
<link href="image/giaodien/favicon0.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/skin.css" rel="stylesheet" type="text/css">
<link href="css/jquery.css" rel="stylesheet" type="text/css">
<link href="css/menudrop.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/ichphien.js"></script>
<script type="text/javascript" src="js/jquery01.js"></script>
<script type="text/javascript" src="js/ajax_loa.js"></script>
<script language="JavaScript" type="text/javascript">
function check_form()
{
	user=document.form.username.value;
	var loiuser=document.getElementById("iduser");

	{
		if (user==0)
		{
		form.username.style.borderColor='red';
		loiuser.innerHTML="Username must be filled !";
		document.form.username.focus();
		return false;
		}
		loiuser.innnerHTML="";
		if(user.length<6)
		{
		form.username.style.borderColor='red';
		loiuser.innerHTML="Username must contain more than 6 characters !";
		document.form.username.focus();
		return false;
		}
		loiuser.innerHTML="";
	}
	pass=document.form.password.value;
	var loimk=document.getElementById("idpass");

	{
		if(pass==0)
		{
		form.password.style.borderColor='red';
		loimk.innerHTML="Passworld must be filled !";
		document.form.password.focus();
		return false;
		}
		loimk.innerHTML="";
	if(pass.length<6)
		{
			loimk.innerHTML="Password must contain more than 6 characters !";
			document.form.password.focus();
			return false;
		}

		loipass.innerHTML="";
		}
		mail=document.form.email.value;
		var loimail=document.getElementById("idmail");
		dangmail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/
		kq=dangmail.test(mail);
		if(mail=="")
		{
			loimail.innerHTML="Email must be filled !";
			document.form.email.focus();
			return false;
		}
		loimail.innerHTML="";
		if(kq==false)
		{
			loimail.innerHTML="Email format is wrong !";
			document.form.mail.focus();
			return false;
		}
		loimail.innerHTML="";
}
</script>


<body>
<div class="top-wrap">
	<div id="main">
	<div id="top_menu">
    	<div class="tleft">
		<a style="width: 145px; height: 37px; display: block;" href="index.php">
                <img width="145" height="37" src="<?php include("logo.php"); ?>">
          </a>
		</div>
		<div class="tcenter">
			<?php include("form/seach.php"); ?>
		</div>
        <div class="tright"><!--form login-->
            	<?php
						if(isset($_SESSION['user_id'])&& isset($_SESSION['pass']))
						{
							echo "<div id='drop_menu'>";
							echo "<ul id='drop_menu_ul'><li><a class='menuhoten'>User</a><ul id='drop_menu_sub'>";
							echo "<li><a href='./?mod=suathongtin'>Edit Information</a></li>";
							echo "<li><a href='logout.php'>logout</a></li>";
							echo "</ul></li></ul>";
							echo "</div>";
						}
						else
						{
							echo file_get_contents("login.php");
						}
				?>
   	  </div>
   	  </div>
       		<?php include("form/menutop.php");?>
        <div class="clr">
        </div>
    </div>
</div>
<div id="main">
    <div id="contents">
        	<div id="dangky_thanhvien">
<div class="content-block album">
  <h2 class="content-block-title"> Register </h2>
</div>
				<div class="thongtin_dangky">
					<div style="padding: 10px;">
						<link type="text/css" href="style.css" rel="stylesheet">
						<script type="text/javascript" src="js/xuly.js"></script>

<style>
	#form_title{
	background:#ccc;
    font-weight:bold;
    border-bottom:#CCCCCC solid 1px;
    padding:5px;
}
form label{
    width:150px;
    float:left;
    text-align:right;
    padding:2px 10px 0px 0px;
}

.rq, .error{color: red}
</style><form action="" method="POST" name="form">
			<div id="title_tk">Register Information</div>
			<div id="block">
			<span style="color:red;text-align:center;"><?php echo $tb;?></span>
			<form action="" method="POST" name="form">
			<div id="form_title">Personal Information</div>
			<table width="500px">
				<tr>
				<td width="150px">Name:</td>
				<td width="350px"><input type="text" name="hoten" size="30">
				</tr>
				<tr>
				<td>Sex:</td>
					<td>Male<input type="radio" name="gt" value="Nam" checked="checked">
						Female<input type="radio" name="gt" value="Nữ">
					</td>
				</tr>
				<tr>
				<td>Date of birth:</td>
					<td>
						<select name="ngay">
							<?php
							for($i = 1; $i <=31 ; $i++)
								{
							?>
							<option value="<?php echo $i; ?>"><?php echo ($i <= 9) ? "0".$i : $i; ?></option>
							<?php
									}
							?>
						</select>
						<select name="thang">
							<?php
							for($i = 1; $i <=12 ; $i++)
								{
							?>
							<option value="<?php echo $i; ?>"><?php echo ($i <= 9) ? "0".$i : $i; ?></option>
							<?php
									}
							?>
						</select>
						<select name="nam">
							<?php
							for($i = 1975; $i <=2012 ; $i++)
								{
							?>
							<option value="<?php echo $i; ?>"><?php echo ($i <= 9) ? "0".$i : $i; ?></option>
							<?php
									}
							?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Address:</td>
					<td><input type="text" name="diachi" size="30">
				</tr>
			</table>
			<div id="form_title">Account Information</div>
			<i>Everyline with *( <span style="color:red">*</span>) must be filled</i>


			<table width="500px" cellpadding="5" cellspacing="5">
                    	<tr>
                    		<td width="150px" align="left">Username:</td>
							<td width="350px"> <input type="text" name="username" size="30" id="username"><span class="rq"> * </span>
					<br/><span id="iduser" class="error"><?php echo $usertt;?></span>
                            </td>
                       	</tr>
                        <tr>
                        	<td   align="left">Password:</td>
						  <td><input type="password" name="password" size="30" id="pass"><span class="rq"> * </span>
					<br/><span id="idpass"class="error"></span></td>
                        </tr>
                        <tr>
                            <td   align="left">Email:</td>
                            <td><input type="text" name="email" size="30"><span class="rq"> * </span>
					<br/><span id="idmail" class="error"><?php echo $mailer;?></span>
</td>
                          <td>&nbsp;</td>
                    	</tr>
                        <tr>
                            <td align="center" colspan="2">
                              <input name="submit" type="submit" class="_add_" onClick="return check_form();" value="Register">
                                <input class="_add_" type="reset" value="Redo">
                            </td>
                        </tr>
              </table>


		</div>
                </td>

                  </div>
			</div>
        	</div>
        	<div class="clr">
    </div>
</div>
</form>
<div id="footer">
        <div class="adv_footer">
        </div>
            <div class="footer-info">
                <?php include"form/lienket.php";?>
                <div class="copyright">
                    <?php include("banquyen.php");?>
                </div>
                <div class="clr">
                </div>
            </div>
            <div class="gop-y"><a href="#"><img src="image/giaodien/gopy0000.jpg" border="0"></a>
            </div>
</div>
	</div>
</div>
</body>
</html>
