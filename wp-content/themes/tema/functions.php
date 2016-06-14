<?php 
 add_theme_support("post-thumbnails");
 add_image_size("mi_tamaño",138,110, true);
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

function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// Paginación avanzada
function pagination($pages = '', $range = 2)
{
	$pagina_palabra			= __('Página', 'webtranslations');
	$de_palabra				= __('de', 'webtranslations');
	$primero 				= __('Primero', 'webtranslations');
	$atras 					= __('Atrás', 'webtranslations');
	$siguiente 				= __('Siguiente', 'webtranslations');
	$ultimo 				= __('Último', 'webtranslations');
	$showitems 				= ($range * 1) + 1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}
	if(1 != $pages)
	{
		echo "<span>".$pagina_palabra." ".$paged." ".$de_palabra." ".$pages."</span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class='boton small' href='".get_pagenum_link(1)."' title=".$primero.">&laquo;</a>";
		if($paged > 1 && $showitems < $pages) echo "<a class='boton small' title=".$atras." href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive boton small' title='".$i."'>".$i."</a>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo "<a class='boton small' title=".$siguiente." href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>"; 
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class='boton small' title=".$ultimo." href='".get_pagenum_link($pages)."'>&raquo;</a>";
	}
};



