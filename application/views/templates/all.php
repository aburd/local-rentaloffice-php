<section>
	<div class="container">
<!-- 		<div class="row">
			<div class="col-xs-12">
				<h1>エリア</h1>
			</div>
		</div> -->
		<!-- Anchor links for area -->
		<div class="row">
			<div id="area-anchors" class="small">
				<?php $i = 0; ?>
				<?php foreach($byArea as $city => $areaArray): ?>
				<?php if ($i === 0): ?>
				<div class="city-block col-md-2 col-md-offset-1">
				<?php else: ?>
				<div class="city-block col-md-2">
				<?php endif ?>				
					<a href="./<?= $city ?>"><h3><?= $dictionary[$city] ?></h3></a>
					<ul>
						<?php foreach($areaArray as $area): ?>
						<li><a href="./<?= $city ?>#<?= $area ?>"><?= $area ?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<?php $i++; ?>
				<?php endforeach ?>
			</div> 
		</div> <!-- End anchors for area -->
		<!-- Begin cities by photo section -->
		<div class="col-xs-12">
			<ul id="cities">
				<li>
					<div>
						<a href="./tokyo/">
							<img src="<?php echo asset_url(); ?>img//tokyo.jpg" alt="">
							<h3>東京</h3>
						</a>
					</div>
				</li>
				<li>
					<div>
						<a href="./yokohama/">
							<img src="<?php echo asset_url(); ?>img//yokohama.jpg" alt="">
							<h3>横浜</h3>
						</a>
					</div>
				</li>
				<li>
					<div>
						<a href="./osaka/">
							<img src="<?php echo asset_url(); ?>img//osaka.jpg" alt="">
							<h3>大阪</h3>
						</a>
					</div>
				</li>
				<li>
					<div>
						<a href="./nagoya/">
							<img src="<?php echo asset_url(); ?>img//nagoya.jpg" alt="">
							<h3>名古屋</h3>
						</a>
					</div>
				</li>
				<li>
					<div>
						<a href="./fukuoka/">
							<img src="<?php echo asset_url(); ?>img//fukuoka.jpg" alt="">
							<h3>福岡</h3>
						</a>
					</div>
				</li>
			</ul>
		</div> <!-- End cities by photo section -->
	</div>
</section>