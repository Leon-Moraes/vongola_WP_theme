<?php
    $theme_directory = get_template_directory_uri();

    $site_logo = get_custom_logo();
    $site_title = wp_title('|', false, 'right');
    $site_name = get_bloginfo('name');
    $site_url = get_bloginfo('url');

    $nav_locations = get_nav_menu_locations();
    $nav_locations_menu = wp_get_nav_menu_object( $nav_locations['header-menu'] );
    $nav_locations_menu_items = wp_get_nav_menu_items( $nav_locations_menu->term_id, array( 'order' => 'DESC' ) );
?>
<!DOCTYPE html>
<html>   
        <head <?php wp_head(); ?>>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
        </head>
        <body <?php body_class(); ?> class="main-body">
            <ul id="barra-nav" class="barra-nav">
                <li><a class="emblema" url href="<?php echo $site_url; ?>" </a></li>  
                <div class="bar">
                    <?php foreach($nav_locations_menu_items as $nav_item) : ?>
                    <li><a class="link" href="<?php echo $nav_item->url; ?>"><?php echo $nav_item->title; ?></a></li>
                    <?php endforeach ?>
                    
                    
                    <div class="user">
                        <p><!--Nome de Usuario entrará aqui--></p>
                        <a class="login" href="javascript:void(0);">Entrar</a>
                        <div class="login-tab">
                            <form action="login-forms/sigin.php" method="post" >
                                <a  ><img class="photo-user" src=" "></a> 
                                <li class="login-forms"><input class="forms" type="text" name="user email" placeholder="Username"></li>
                                <li class="login-forms"><input class="forms" type="text" name="pass" placeholder="Senha"></li>
                                <li class="login-button"><button class="button" type="submit" name="login-submit">Login</button></li>
                                <li class="sigin-button"><button class="button" type="submit" name="signin-submit">Sign in</button></li>
                                <li class="login-forms">
                                    <input id="checkbox "class="keep-connection" type="checkbox">
                                    <label class="keep-connection" for="checkbox">Manter-se conectado ?</label>
                                </li>
                            </form>
                        </div>

                    </div>
                </div>    
                <li class="icon">
                        <a href="javascript:void(0);" class="menu-trigger" >☰</a>
                </li>
            </ul>