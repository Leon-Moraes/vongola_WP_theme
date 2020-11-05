<?php
    $theme_directory = get_template_directory_uri();

    $site_logo = get_custom_logo();
    $site_title = wp_title('|', false, 'right');
    $site_name = get_bloginfo('name');
    $site_url = get_bloginfo('url');
?>
<!DOCTYPE html>
        <footer>
                 
        </footer>
    </body>
<?php wp_footer(); ?>

</html>