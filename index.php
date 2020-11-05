<?php get_header(); ?>
        
            <div class="main-pag">
                <?php while(have_posts()) : the_post(); ?>
                    <div>
                        <a href="<?php the_permalink()?>" >
                        <?php 
                            $preview = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0];
                            if($preview):
                        ?>
                            <img src="<?php echo $preview; ?>" class="" />
                        <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>             
<?php get_footer(); ?>


