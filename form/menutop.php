
<div id="menu_nav">
<ul>
    <div class="home">
        <a href="index.php">
            <img src="image/giaodien/home.png" />
        </a>
    </div>
    <li><a href="index.php#">Music</a>
    </li>
        </ul>
    </li>
	<li><a href="index.php#">Chart</a></li>
  <li><a href="index.php#">Album</a></li>
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
