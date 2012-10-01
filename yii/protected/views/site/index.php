<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

                    <?php $this->widget('application.components.CmcBanner') ?>
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
					    			<?php echo CHtml::link("Xem thêm...",array('product/antivirus')); ?>
					    			<img src="images/Antivirus-thumbs-img.png" style="padding-top: 10px" />
					    		</div>
					    		<div class="span3 tab">
					    			<h3>CMC Internet Security</h3>
					    			<p>CMC Internet Security là giải pháp giúp bạn bảo vệ máy tính một cách toàn diện và đặc biệt là MIỄN PHÍ cho người dùng cá nhân.</p>
					    			<?php echo CHtml::link("Xem thêm...",array('product/internetsec')); ?>
					    			<img src="images/InternetSercurity-thumbs-img.png" style="padding-top: 10px" />
					    		</div>
					    		<div class="span3 tab">
					    			<h3>CMC Mobile Security</h3>
					    			<p>CMC MegaVNN là giải pháp giúp bạn bảo vệ máy tính một cách toàn diện và đặc biệt là MIỄN PHÍ cho người dùng cá nhân.</p>
					    			<?php echo CHtml::link("Xem thêm...",array('product/mobilesec')); ?>
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

                    
					<?php $this->widget('application.components.Sidebar') ?>
                    
					<div class="clear"></div>
                    
					<?php $this->widget('application.components.Slider') ?>
                    
                    <?php $this->widget('application.components.VideoIndex') ?>
                    
					<div class="clear"></div>
                    
                    <?php $this->widget('application.components.CmcFooter') ?>

