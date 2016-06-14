<?php get_header(); ?>
<body>
	<section class="general2">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
       <div class="titulo"><h1><?php the_title(); ?></h1></div>
       <div class="completo"> <p><?php the_content(); ?></p></div>
          <div class="final">
          <strong> <?php the_author(); ?></strong> -
          <small><?php the_date(); ?></small> - <small> <?php the_time( ); ?></small>
          </div>
           
           <?php get_footer(); ?>
       
       <?php endwhile; ?>
       <!-- post navigation -->
       <?php else: ?>
       <h3>No se encontraron entradas</h3>
       <!-- no posts found -->
       <?php endif; ?>
 
          

 
    </div>
	</section>


</body>