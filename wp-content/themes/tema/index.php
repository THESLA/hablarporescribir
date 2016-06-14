     <?php get_header(); ?>
     


   
<div class="entradas">
   <div><h2>NEWs</h2></div>
   <div class="post"> 
 
    <!-- limite de post -->
    <?php
    $args=array(
   'showposts' => 4,
    );
    $my_query = new WP_Query($args); 

   if( $my_query->have_posts() ) : ?>
   <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <!-- Código de cada post en la lista -->
         <div class="articulo">
        
        
        <div class="foto">
          <figure><?php if ( has_post_thumbnail() ) {
           the_post_thumbnail(mi_tamaño);
           } else { ?>
           <img src="/wp-content/themes/tema/imagenes/wordpress-138x110.png" alt="<?php the_title(); ?>" />
           <?php } ?>
         </figure> 
        
        </div>
        <div class="parrafo">
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <p><?php echo get_excerpt(310); ?></p>
          <strong> <?php the_author(); ?></strong> -
          <small><?php the_date(); ?></small>

        </div>

        

       </div> 
    <?php endwhile; ?>
    

   
     <?php endif; ?>
  </div>  

</div>

  <div class="video" >
        <div><h2>Recetas</h2></div>
        <div class="post">
        <?php rewind_posts(); ?>
        <?php query_posts('order=Asc&cat=2') ?>
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <!-- post -->
       
        
        
        
         <div class="articulo">
        
        
        <div class="foto">
          <figure><?php if ( has_post_thumbnail() ) {
           the_post_thumbnail(mi_tamaño);
           } else { ?>
           <img src="/wp-content/themes/tema/imagenes/wordpress-138x110.png" alt="<?php the_title(); ?>" />
           <?php } ?>
         </figure> 
        
        </div>
        <div class="parrafo">
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <p><?php echo get_excerpt(310); ?></p>
          <strong> <?php the_author(); ?></strong> -
          <small><?php the_date(); ?></small>

        </div>

        

       </div> 
    <?php endwhile; ?>
    

   
     <?php endif; ?>
     </div>
     </div>

     <div class="audio">
       <div><h2>Audio</h2></div>
       <div class="capsula">

         <iframe width="50%" height="355" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/119361701&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
       </div>
     </div>
   

  </body>
 <?php get_footer(); ?>
 
