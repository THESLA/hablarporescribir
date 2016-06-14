     <?php get_header(); ?>
     

  <body>


     <div class="container" class="general">
      
     <div class="row" class="derecha">

       <h3>ANUNCIOS</h3>
       
             <div class="row" class="pull-left">
        <?php rewind_posts(); ?>
        <?php query_posts('order=Asc&cat=2') ?>
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <!-- post -->
       <div class="Anuncio">
        
        
        <div class="foto-An">
          <a href="<?php the_permalink(); ?>"><figure><?php if ( has_post_thumbnail() ) {
           the_post_thumbnail(mi_tamaño_An);
           } else { ?>
           <img src="/wp-content/themes/tema/imagenes/wordpress-138x110.png" alt="<?php the_title(); ?>" />
           <?php } ?>
           <div><h1><?php the_title(); ?></h1></a>
         </figure> 
         
        </div>
        

        

       </div> 
       

       <?php endwhile; ?>
       <!-- post navigation -->
       <?php else: ?>
       <h3>No se encontraron entradas</h3>
       <!-- no posts found -->
       <?php endif; ?>
       
       </div>
     </div>

     <div class="entradas">

      
      <h2 class="texto">NOTICIAS</h2>
 
 <!-- limite de post -->
 <?php
 $args=array(
   'showposts' => 7,
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
   <div class='pagination'>
				<a href="/wp-content/themes/page"> Mas Entradas </a>
			</div>
     <?php endif; ?>
       
     

               
       </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
 <?php get_footer(); ?>
 
