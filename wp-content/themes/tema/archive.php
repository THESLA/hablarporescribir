   <?php get_header(); ?>

   
<body>
	<section class="general2">
		<h2 class="texto">Entradas resienstes</h2>
       <?php
 $args=array(
   'showposts' => -1,
 );
 $my_query = new WP_Query($args); 

 if( $my_query->have_posts() ) : ?>
   <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
   <!-- Código de cada post en la lista -->
       
       <a href="<?php the_permalink(); ?>"><h3 ><?php the_title(); ?></h3></a>
       <div class="completo"><p><?php echo get_excerpt(310); ?></p></p></div>
          <div class="final">
          
          <small><?php the_date(); ?></small> - <small> <?php the_time( ); ?></small>
          </div>
           
          
       
       <?php endwhile; ?>
       <!-- post navigation -->
       <?php get_footer(); ?>
       <?php else: ?>
       <h3>No se encontraron entradas</h3>
       <!-- no posts found -->
       <?php endif; ?>
 
          

 
    </div>
	</section>
	</body>
