<?php 
 add_theme_support("post-thumbnails");
 add_image_size("mi_tamaño",280,120, true);
 add_image_size("mi_tamaño_An",230,90, true);


/*/////////////Limitar La cantidad De Caracteres En El resumen///////////*/
 function get_excerpt($count){  
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content(); 
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'... <a href="'.$permalink.'">leer mas</a>';
    return $excerpt;
}

/*///////////////esta es la funcion del menu//////////////////*/
function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer')
                )
        );
}
add_action('init', 'register_my_menus');


 if ( function_exists('register_sidebar') )
       register_sidebar(array(
  'name'=>'header_widget',
        'before_widget' => '<liclass="widget">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
  ));




