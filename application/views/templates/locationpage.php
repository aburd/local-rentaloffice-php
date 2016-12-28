<!-- Gallery -->

<div class="slider">
	<div class="flexslider">
		<ul class="slides">
			<?php foreach ($pictures as $picture): ?>
			<li><img src="<?= $picture ?>" alt="" class="lazy" data-src="<?= $picture ?>"></li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
	

<section>
	<div class="container">
		<!-- Description -->
		<div class="row">
			<div class="col-xs-12">
				<h1>
					<?php echo $location['namae']; ?>
				</h1>
				<p>
					<?php echo $location['jaAddress']; ?>
				</p>
				<p>
					0<?php echo $location['phoneNumber']; ?>
				</p>
			</div>
		</div>
	</div>

</section>