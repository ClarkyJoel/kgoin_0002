    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>CMC Infosec</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/coolMenu.css" rel="stylesheet">
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js"></script>
	<script src="js/tabs.js"></script>
	<link href="css/generic.css" rel="stylesheet" type="text/css" />
    
    <!-- Bootstrap -->
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    </head>
    <body>
    	<div id="wrapper-shadow">
		<div class="span11 wrapper">
			<div class="row">
			<div id="header">
				
					<div class="span3 logo">
						<?php include "/module/header.php"; ?>
					</div>
					<div class="clear"></div>
					<div class="banner">
						<img src="images/homepage-banner.png" style="padding-top: 5px; width: 1025px;" />
					</div>
				
			</div>
			<div id="content">
					<div class="clear"></div>
					<h3>Sản Phẩm & Dịch Vụ</h3>
					<div id="tabContainer">
					    <div class="tabs">
						    <ul>
							    <li id="tabHeader_1">Cá nhân, Gia đình</li>
							    <li id="tabHeader_2">Doanh Nghiệp</li>
							    <li id="tabHeader_3">Mobile</li>
							    <li id="tabHeader_4">Dịch Vụ</li>
						    </ul>
					    </div>
					    <div class="tabscontent">
					    	<div class="row tabpage" id="tabpage_1">
					    		<div class="span3 tab" >
					    			<h3>CMC Antivirus</h3>
					    			<p>CMC Antivirus là giải pháp giúp bạn bảo vệ máy tính một cách toàn diện và đặc biệt là MIỄN PHÍ cho người dùng cá nhân.</p>
					    			<a href="cmc-antivirus.php">Xem thêm...</a>
					    			<img src="images/Antivirus-thumbs-img.png" style="padding-top: 10px" />
					    		</div>
					    		<div class="span3 tab">
					    			<h3>CMC Internet Security</h3>
					    			<p>CMC Internet Security là giải pháp giúp bạn bảo vệ máy tính một cách toàn diện và đặc biệt là MIỄN PHÍ cho người dùng cá nhân.</p>
					    			<a href="cmc-internetsecurity.php">Xem thêm...</a>
					    			<img src="images/InternetSercurity-thumbs-img.png" style="padding-top: 10px" />
					    		</div>
					    		<div class="span3 tab">
					    			<h3>CMC Mobile Security</h3>
					    			<p>CMC MegaVNN là giải pháp giúp bạn bảo vệ máy tính một cách toàn diện và đặc biệt là MIỄN PHÍ cho người dùng cá nhân.</p>
					    			<a href="cmc-mobilesecurity.php">Xem thêm...</a>
					    			<img src="images/MobileSecurity-thumbs.png" style="padding-top: 10px;"/>
					    		</div>
					    	</div>
					    	<div class="row tabpage" id="tabpage_2">
					    		<h3>DOANH NGHIEP CONTENT...</h3>
					    	</div>
					    	<div class="row tabpage" id="tabpage_3">
					    		<h3>MOBILE CONTENT...</h3>
					    	</div>
					    	<div class="row tabpage" id="tabpage_4">
					    		<h3>DICH VU CONTENT...</h3>
					    	</div>
					      
					    </div>
					</div>
					<div id="sidebar">
						<?php include "/module/news-support-sidebar.php"; ?>
					</div>
					<div class="clear"></div>
					<div id="slider">
						<?php include "/module/slider.php"?>
					</div>
					<div id="embedVideo_index">
						<?php include "/module/embedVideoIndex.php"; ?>
					</div>
				
			
					<div class="clear"></div>
					<div id="footer">
						<?php include "module/footer.php"; ?>
					</div>
				</div> <!-- .content -->
			</div> <!-- .Row -->
		</div> <!-- .Wrapper -->
		</div>
    </body>
    </html>