	<?php get_header(); ?>

        <main>
            <div class="main-pag">
               <?php while(have_posts()) : the_post(); ?>
                
                <?php endwhile; ?>
            
            </div>        
        </main>     
   
        <?php get_footer(); ?>