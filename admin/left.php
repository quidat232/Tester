<?php
	session_start();
	include("config.php");
	$sql1=mysql_query("select count(*) As sohang from baihatmoi");
	$row=mysql_fetch_array($sql1);
	{
?>
<div class="menu">

        <div class="breadLine">
            <div class="arrow"></div>
            <div class="adminControl active">
                Hi, Admin
            </div>
        </div>

        <div class="admin">
            <div class="image">
                <img src="img/users/aqvatarius.jpg" class="img-polaroid"/>
            </div>
            <ul class="control">
                <li><span class="icon-comment"></span> <a href="./?mod=nhacmoi">New Songs</a> <a href="./?mod=nhacmoi" class="caption red"><?php echo $row['sohang']; ?></a></li>
                <li><span class="icon-cog"></span> <a href="#">Information</a></li>
                <li><span class="icon-share-alt"></span> <a href="logout.php">Logout</a></li>
            </ul>
            <div class="info">
                <span><?php $now = getdate();

    $currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"];
    $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"];

    echo "It is now $currentTime on $currentDate";?></span>
            </div>
        </div>

        <ul class="navigation">
            <li class="active">
                <a href="index.php">
                    <span class="isw-grid"></span><span class="text">Home</span>
                </a>
            </li>
            <li class="openable">
                <a href="">
                    <span class="isw-favorite"></span><span class="text">Song Management</span>
                </a>
                <ul>
                    <li>
                        <a href="./?mod=nhacmoi">
                            <span class="icon-circle-arrow-up"></span><span class="text">New Songs</span>
                        </a>
						<a href="#" class="caption yellow link_navPopMessages"><?php echo $row['sohang']; }?></a>
                    </li>
                    <li>
                        <a href="./?mod=nhacdadang">
                            <span class="icon-ok"></span><span class="text">Posted Songs</span>
                        </a>
                    </li>
                    <li>
                        <a href="./?mod=theloai">
                            <span class="icon-music"></span><span class="text">Genre</span>
                        </a>
                    </li>
                    <li>
                        <a href="./?mod=nhachot">
                            <span class="icon-fire"></span><span class="text">Hot Music</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="openable">
                <a href="">
                    <span class="isw-archive"></span><span class="text">Album and Artist</span>
                </a>
				<ul>
                    <li>
                        <a href="./?mod=album">
                            <span class="icon-list-alt"></span><span class="text">Album</span>
                        </a>
                    </li>
				</ul>
				<ul>
                    <li>
                        <a href="./?mod=casy">
                            <span class="icon-user"></span><span class="text">Artist</span>
                        </a>
                    </li>
				</ul>
            </li>
            <li class="openable">
                <a href="">
                    <span class="isw-users"></span><span class="text">User Management</span>
                </a>
                <ul>
                    <li>
                        <a href="./?mod=user">
                            <span class="icon-star-empty"></span><span class="text">User</span></a>
                    </li>
                </ul>
            </li>
            <li class="openable">
                <a href="">
                    <span class="isw-documents"></span><span class="text">General</span>
                </a>
				<ul>
                    <li>
                        <a href="./?mod=chuchay">
                            <span class="icon-refresh"></span><span class="text">Running Text</span></a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="./?mod=footer">
                            <span class="icon-list-alt"></span><span class="text">Footer</span></a>
                    </li>
                </ul>
				<ul>
                    <li>
                        <a href="./?mod=logo">
                            <span class="icon-bookmark"></span><span class="text">Logo</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="logout.php">
                    <span class="isw-power"></span><span class="text">Logout</span>
                </a>
            </li>
        </ul>

        <div class="dr"><span></span></div>

        <div class="widget-fluid">
            <div id="menuDatepicker"></div>
        </div>
        <div class="dr"><span></span></div>
    </div>
