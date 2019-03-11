<?php $heroImage = get_field('hero_background_image'); ?>

<section class="heroImageArea mainElement">
	<div class="heroImageContainer"style="background-image: url(<?php echo $heroImage['url']; ?>);">
		<div class="imageDarkener">
		<h1><?php the_field('hero_title'); ?></h1>
		<p class="heroDesc">
<?php the_field('hero_description'); ?>
		</p>
	</div>
</div>
</section>