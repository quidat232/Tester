<div id="menu_nav">
<ul>
    <div class="home">
        <a href="index.php">
            <img src="image/giaodien/home.png" />
        </a>
    </div>
	<?php
	if(isset($_SESSION['u_id']))
	{
	?>
    <li><a href="./?mod=upload">Upload</a></li>
	<?php
	}
	?>
	<div class="clr">
    </div>
</div>
