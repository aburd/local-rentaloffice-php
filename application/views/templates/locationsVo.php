<section>
	<div class="container">
		<div class="locations by-area">			
			<h1>エリア</h1>
			
			<!-- Anchor links for area -->
			<ul id="area-anchors">
				<?php
				$i = 0;
				foreach($byArea as $area => $locationArray)
				{
					$len = sizeof($byArea);
					echo "<a href='#$area'>$area</a>";
					$i += 1;
					if($i !== $len ){ echo ' | ';}
				}
				?> 
			</ul>
			
			<!-- BY AREA -->
			<?php foreach ($byArea as $area => $locationArray): ?>
			<h2 id="<?=$area?>"><?php echo $area ?></h2>
			<!--  LOCATIONS IN AREA -->
			<div class="row">
				<div class="col-lg-8 col-md-6">
				
					<?php foreach ($locationArray as $location): ?>
					<div class="location-box col-lg-6 col-md-12">
						<div class="building">
							<!-- Image -->
							<img src="<?= asset_url().'img/buildings/resized/'.$location['url'].'.jpg' ?>" alt="<?= $location['namae'] ?>">
							<?php if ( $location['hasVoDeal']): ?>
							<div class="monthly-deal-notice">
								<?php echo date('m').'月限定オファー'; ?>
							</div>
							<?php endif ?>
								
							<div class="inner">
								<a class="floor-name darker-bottom" href="<?= $location['url'] ?>">
									<?= $location['namae']; ?>
								</a>
								<!-- Prices -->
								<?php $productNames = array('バーチャルオフィス','電話秘書代行','貸し住所','会議室') ?>
								<div class="price-box">
									
									<!-- Location HAS NO deal -->
									<?php if ( ! $location['hasVoDeal']): ?>
										<?php for($i = 0; $i < sizeof($location['voPrices']); $i += 1): ?>
											<div class="lighter-bottom line">
												<div class="product-name"><?=$productNames[$i]?></div> 
												<div class="listprice">&yen;<?=$location['voPrices'][$i]?></div>
											</div>
										<?php endfor ?>
									<!-- Location HAS deal -->
									<?php else: ?>
										<?php for($i = 0; $i < sizeof($location['voSpecialDeal']); $i += 1): ?>
											<div class="lighter-bottom line">
												<div class="product-name"><?=$productNames[$i]?></div> 
												<div class="listprice">
													<span class="old-price">&yen;<?=$location['voPrices'][$i]?></span> &#8594;
													<span class="new-price">&yen;<?=$location['voSpecialDeal'][$i]?></span>
												</div>
											</div>
										<?php endfor ?>
									<?php endif; ?>
									
								</div>
								<!-- CTA and such -->
								<div class="show-box">
									<a class="btn animated cta" href="<?= base_url().'location/'.$city.'/'.$location['url'] ?>">詳細</a>
									<a class="btn animated cta green pull-right scroll" href="#contact-us">お問合せ</a>
								</div>	
							</div>
							
						</div>
					</div>	
					<?php endforeach ?>
					<!-- End locations -->
					
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
