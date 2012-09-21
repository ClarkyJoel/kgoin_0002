<a href="index.php"><img src="images/cmcinfosec-logo.png" /></a>
		<div class="span1 text">
			<h3>CMC InfoSec</h3>
			<span>An toàn từng click</span>
		</div>
</div>       
<div class="span5 search">
	
		<span>Diễn Đàn CMC InfoSec</span>
		<img src="images/search-icon.png">
		<input name="search" type="text" maxlength="20" class="search-input" />
		<button class="btn btn-custom" type="button">OK</button>
	
</div>
<div class="clear"></div>
<div id="mainMenu" class="main-menu">
	<div class="menu">
		<ul id="coolMenu" class="main_menu">
			<li id="menuItem_1" class="active">
				<a href="index.php">
					<img src="images/mainMenu-logo.png" class="mainMenuLogo-img" />
				</a>
				<ul class="noJS">
					<li><?php echo CHtml::link("Sản phẩm & dịch vụ",array('site/index')); ?></li>
					<li><?php echo CHtml::link("Đặt hàng",array('page/dathang')); ?></li>
					<li><?php echo CHtml::link("Tải về",array('download/index')); ?></li>
					<li><?php echo CHtml::link("Đại lý",array('page/daily')); ?></li>
				</ul>
			</li>
			
			<li id="menuItem_2" ><?php echo CHtml::link("Hỗ trợ",array('error/index')); ?></li>
			<li id="menuItem_3"><?php echo CHtml::link("Liên hệ",array('error/index')); ?></li>
			<li id="menuItem_4">
				<?php echo CHtml::link("Giới thiệu",array('about/index')); ?>
				<ul class="noJS">
					<li><?php echo CHtml::link("Hồ sơ công ty",array('about/hoso')); ?></li>
					<li><?php echo CHtml::link("Đối tác chiến lược",array('error/index')); ?></li>
					<li><?php echo CHtml::link("Tuyển dụng",array('error/index')); ?></li>
				</ul>
			</li>
			<li id="menuItem_5"><?php echo CHtml::link("Tin tức",array('error/index')); ?></li>
		</ul>
	</div>
</div>