<?php
	error_reporting(E_ERROR);
	session_start();
	require "config.php";
	header("Cache-Control: no-cache");
?>
<html>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<head>
<script language="JavaScript">
	var txt="Listen to music online - Download free high quality music";
	var espera=160; var refresco=null; function rotulo_title()
	{
		document.title=txt; txt=txt.substring(1,txt.length)+txt.charAt(0); refresco=setTimeout("rotulo_title()",espera);
	}
	rotulo_title();
</SCRIPT>

<link rel="shortcut icon" href="image/giaodien/favicon1.ico" type="image/x-icon" />
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/skin.css" rel="stylesheet" type="text/css">
<link href="css/jquery.css" rel="stylesheet" type="text/css">
<link href="css/menudrop.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<link href="css/btup.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/ichphien.js"></script>
<script type="text/javascript" src="js/jquery01.js"></script>
<script type="text/javascript" src="js/ajax_loa.js"></script>
<script type="text/javascript" src="js/snowstorm.js"></script>
<script type="text/javascript">
snowStorm.snowColor = 'blue';
snowStorm.flakesMaxActive = 1000000;
snowStorm.useTwinkleEffect = true;
</script>
</head>
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
	      <div class="tright">
	            	<?php
							if(isset($_SESSION['user_id']) && isset($_SESSION['pass']))
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
		<div class="chuchay">
        	<div class="chuchay1">
				<?php include "chuchay.php";?>
			</div>
		</div>
        <?php require 'center.php';?>
	</div>
	<div id="footer">
        <div class="adv_footer">
        </div>
            <div class="footer-info">
                <?php include "form/lienket.php";?>
            <div class="copyright">
								<?php include "form/footer.php";?>
            </div>
                <div class="clr">
                </div>
            </div>
        </div>
	</div>
</div>
</body>
</html>
