	<?php get_header(); ?>

    <body <?php body_class(); ?> class="main-body">
        <main>
            <div class="main-pag">
               <?php while(have_posts()) : the_post(); ?>
                
                <?php endwhile; ?>
            
            </div>        
        </main>     
    </body>
        <?php get_footer(); ?>