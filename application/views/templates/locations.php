<section>
	<div class="container">
		<div class="locations by-area">			
			<div class="row">
				<div class="col-xs-12">
					<h1><?= $cityJa ?></h1>
			
					<!-- Anchor links for area -->
					<ul id="area-anchors" class="text-center">
						<?php
						$i = 0;
						foreach($byArea as $area => $locationArray)
						{
							$len = sizeof($byArea);
							echo "<a href='#$area'>$area</a>";
							$i += 1;
							if($i !== $len ){ echo '<span> | </span>';}
						}
						?> 
					</ul>
				</div>
			</div>
			
			<!-- BY AREA -->
			<?php foreach ($byArea as $area => $locationArray): ?>
			
			<!--  LOCATIONS IN AREA -->
			<div class="row">
				<!--		Title		-->
				<div class="col-xs-12">
					<h2 id="<?=$area?>" class="area"><?php echo $area ?></h2>
				</div>
			</div>
			<div class="row">
				<!--		Location Box		-->
				<div class="col-lg-8 col-md-6">
				
					<?php foreach ($locationArray as $location): ?>
					
					<?php
					// Array to be used to generate absolute path for location urls
					$locationUrl = array('location', $city, $location['url']);
					// array to be used for location picture
					$locationPictureUrl = array('_static', 'img/buildings/resized', $location['url'].'.jpg');
					// Array to show product names inside for loop
					$productNames = array('バーチャルオフィス','電話秘書代行','貸し住所','会議室');
					?>
					
					<!-- Location boxes -->
					<div class="location-box col-lg-6 col-md-12">
						<div class="building">
							<!-- Image -->
							<img src="<?= base_url($locationPictureUrl) ?>" alt="<?= $location['namae'] ?>">
								
							<div class="inner">
								<a class="floor-name darker-bottom" href="<?= base_url( $locationUrl ) ?>">
									<?= $location['namae']; ?>
								</a>
								<!-- Prices -->
								<?php  ?>
								<div class="price-box">
									<!-- Location Info -->
									<?php 
										echo p($location['jaAddress']); 
										echo p('Tel: 0'.$location['phoneNumber']);
									?>
									
								</div>
								<!-- CTA and such -->
								<div class="show-box">
									<a class="btn animated cta" href="<?= base_url( $locationUrl ) ?>">詳細</a>
									<a class="btn animated cta green pull-right scroll" href="#contact-us">お問合せ</a>
								</div>	
							</div>
							
						</div>
					</div>	
					<?php endforeach ?>
					<!-- End locations -->
					
				</div>
				<div class="col-lg-4 col-md-6 map-holder">
					<div id="google-map-<?= $area ?>" class="area-map" data-area="<?= $area ?>"></div>
				</div>
			</div> <!-- end row -->
			<?php endforeach ?>
			<!-- End Areas				-->			
		</div>
	</div>	
</section>

<section id="contact">
	<div id="contact-us" class="parallax">
		<div class="container">
			<div class="row">
				<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h2>お問合せ</h2>
					<p>サーブコープのサービス付きレンタルオフィス、バーチャルオフィス、貸会議室についてのご質問は、下記フォームより送信ください。担当者より速やかにご連絡いたします。</p>
				</div>
			</div>
			<div id="contact" class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="row">
					<div class="col-sm-6">
						<form id="main-contact-form" name="contact-form" method="post" action="#">
							<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="名前" required="required" />
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="メールアドレス" required="required" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="お問合せ項目" required="required" />
							</div>
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="4" placeholder="お問い合わせ内容" required="required"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn-submit">送信</button>
							</div>
						</form>
					</div>
					<div class="col-sm-6">
						<div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
							<p>営業時間　平日8:30-17:30</p>
							<ul class="address">
								<li><i class="fa fa-map-marker"></i> <span> 住所:</span> <br />〒100-0005<br />東京都千代田区丸の内1-8-3<br />丸の内トラストタワー本館 20階</li>
								<li><i class="fa fa-phone"></i> <span> 電話番号:</span> <br />0120 8945 66</li>
								<li><i class="fa fa-globe"></i> <span> ウェブサイト:</span> <br /><a href="http://www.servcorp.co.jp/ja/">公式ウェブサイト</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>