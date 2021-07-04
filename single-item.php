<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header();?>

</head>

<body><?php get_template_part('includes/nav'); ?>


	<?php while (have_posts()) : the_post(); ?>

		<!-- Page Header-->
		<?php
		$id = get_post_thumbnail_id();
		$img = wp_get_attachment_image_src($id);
		?>

		<header class="" style="background-image: url('<?php echo $img[0]; ?>')">
			<div class="container position-relative px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
					<div class="col-md-10 col-lg-8 col-xl-7">
						<div class="post-heading">
							<h1><?php the_title(); ?></h1>

						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Post Content-->
		<article class="mb-4">
			<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
					<div class="col-md-10 col-lg-8 col-xl-7">
						<?php the_content(); ?>
						<dl>
								<dt>カテゴリー</dt>
								<?php 
								$terms = get_the_terms(get_the_ID(),'item_category');
								foreach ( $terms as $term){
								?>
								<dd><a href="<?php echo get_term_link($term->slug,'item_category'); ?>">
							<?php echo htmlspecialchars($term->name); ?></a></dd>
							<?php }; ?>
							<dt>価格</dt>
							<?php
							$price = get_post_meta(get_the_ID(), '価格', true); ?>
							<dd><?php echo $price; ?>円</dd>
							<dt>発売日</dt>
							<?php
							$published = get_post_meta(get_the_ID(), '発売日', true);
							?>
							<dd><?php echo $published; ?></dd>
						</dl>
					</div>
				</div>
			</div>
		</article>

	<?php endwhile; ?>
	<?php get_template_part('includes/footer'); ?>

	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
	<?php wp_footer(); ?>
</body>

</html>