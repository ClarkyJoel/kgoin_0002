<?php
$this->breadcrumbs=array(
	'Site'=>array('site/index'),
	'Dathang',
);?>

                    <div id="path"><p><a href="index.php">CMC InfoSec.com</a> > Đặt Hàng</p></div>
					<div class="dathang-content">
						<p><Strong style="color: #0088cf;">Nâng Cấp:</strong> Khách hàng sử dụng CMC Antivirus gọi  <strong style="color: #c1272d;">0972 179 628</strong>  để nâng cấp lên CMC Internet Security</p>
						<div class="dathang-colleft">
                        
							<?php $this->widget('application.components.CmcQuestion') ?>
                            
							<?php $this->widget('application.components.VideoDathang') ?>
                            
						</div>
						<div class="dathang-maincol">
							<div class="dathang-maincol-container">
								<p style="color: red;">Mời bạn đặt mua CMC Internet Security tại đây:</p>
								<p>(Phần mềm CMC sẽ được chuyển tận nơi cho bạn)</p>
								<h2 style="color: #000;padding: 0;margin: 0;">Mua các gói phần mềm diệt virus CMC</h2>
								<ul>
									<span style="color: #0072bc;" >Chọn số lượng sản phẩm từ danh sách cần mua : (*)</span>
									<li>
									<div>
										<select>
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
										<p>Bản quyền 06 tháng cho 01 máy vi tính <span style="color: #0072bc;">x 100 VNĐ</span></p>	
										
									</div><img src="images/card1.png" />		
									</li>
									<li>
										<div>
										<select>
											<option>01</option>
											<option>02</option>
											<option>03</option>
										</select>
										<p>Bản quyền 06 tháng cho 01 máy vi tính <span style="color: #0072bc;">x 200 VNĐ</span></p>	
										
										</div><img src="images/card2.png" />	
									</li>
									<li>
										<div>
											<select>
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
											<p>Bản quyền 06 tháng cho 01 máy vi tính <span style="color: #0072bc;">x 300 VNĐ</span></p>	
											
										</div><img src="images/card3.png" />	
									</li>
									<li>
										<div>
											<select>
												<option>01</option>
												<option>02</option>
												<option>03</option>
											</select>
											<p>Bản quyền 06 tháng cho 01 máy vi tính <span style="color: #0072bc;">x 400 VNĐ</span></p>	
											
										</div><img src="images/card4.png" />	
									</li>
								</ul>
								<div class="clear"></div>
								<div class="dathang_table">
									<p style="color: #0072bc;" >Xin vui lòng cung cấp thông tin:</p>
									<table>
										<tr>
										
											<td>Tên Công Ty:</td>
											<td><input type="text" maxlength="20" name="company" /></td>
										
										</tr>
										<tr>
											<td>Mã Số Thuế:</td>
											<td><input type="text" maxlength="20" name="mst" /></td>
										</tr>
										<tr>
											<td>Người Liên Hệ:</td>
											<td><input type="text" maxlength="20" name="contact" /></td>
										</tr>
										<tr>
											<td>Điện Thoại (*):</td>
											<td><input type="text" maxlength="20" name="phone" /></td>
										</tr>
										<tr>
											<td>Địa Chỉ Nhận Thẻ:</td>
											<td><input type="text" maxlength="255" name="address" class="address" /></td>
										</tr>
										<tr>
											<td>Ngày Nhận Thẻ:</td>
											<td><input type="text" maxlength="20" name="nnt" /></td>
										</tr>
										<tr>
											<td>Giờ Nhận Thẻ:</td>
											<td><input type="text" maxlength="2" name="gnt" class="gnt" /> <input type="text" maxlength="2" name="gnt" class="gnt" /></td>
											
										</tr>
										<tr>
											<td>Thành tiền: 900,000 VNĐ cho 05 thẻ bản quyền các loại</td>
											<td><button type="button" name="submit" class="submit">Đặt Hàng</button></td>
											
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="dathang-rightcol">
                        
							<?php $this->widget('application.components.Sidebar') ?>
                            
							<?php $this->widget('application.components.Support') ?>
                            
							<?php $this->widget('application.components.TopVirus') ?>
						
						</div>
					</div>
					<div class="clear"></div>
                    
					<?php $this->widget('application.components.CmcFooter') ?>