<?php get_header(); ?>

<div class="container">
    <div class="row posts-content">
        <?php while(have_posts()) : the_post(); ?>
            <div class="col-xs-12 col-sm-4 post--item">
                <a href="<?php the_permalink()?>" class="post--item--link">
                <?php 
                    $preview = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0];
                    if($preview):
                ?>
                    <img src="<?php echo $preview; ?>" class="post--item--image" />
                <?php endif; ?>
                    <h2 class="post--item--title"><?php the_title(); ?></h2>
                    <p class="post--item--description"><?php the_excerpt(); ?></p>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>


