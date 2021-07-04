<!DOCTYPE html>
<html lang="ja">

<head>
<?php get_header();?>

</head>

<body><?php get_template_part('includes/nav'); ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>カテゴリー別商品一覧</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php while (have_posts()) : the_post(); ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php the_excerpt(); ?>
                            </h3>
                        </a>
                        
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php endwhile; ?>
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4">
                    <?php //previous_posts_link(); 
                    ?>
                    <?php //next_posts_link(); 
                    ?>

                    <?php echo paginate_links(); ?>
                    <a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a>
                </div>
            </div>
        </div>
    </div>				<?php get_template_part('includes/footer'); ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

    <?php wp_footer(); ?>
</body>

</html>