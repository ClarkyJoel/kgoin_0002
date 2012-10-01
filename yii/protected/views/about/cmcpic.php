<?php
$this->breadcrumbs=array(
	'About'=>array('about/index'),
	'Cmcpic',
);?>

                    <div id="path"><p><a href="index.php">CMC InfoSec.com</a> > <a href="#">Giới Thiệu</a> > CMC Qua Ảnh</p></div>

					<div class="clear"></div>
						<div class="col-left cmcquaanhColleft">
							<div class="le"><img src="images/picture1.png" /><p>Description</p></div>
							<div class="chan"><img src="images/picture2.png" /><p>Description</p></div>
							<div class="le"><img src="images/picture2.png" /><p>Description</p></div>
							<div class="chan"><img src="images/picture1.png" /><p>Description</p></div>
							
						</div>
						<div class="col-right cmcquaanhColright">
                        
								<?php $this->widget('application.components.sidebar') ?>
                                
								<div class="support">
									<img src="images/hotro_icon.png" />
								</div>
                                
								<?php $this->widget('application.components.topvirus') ?>
                                
							</div>
							<div class="clear"></div>
                            
							<?php $this->widget('application.components.cmcfooter') ?>