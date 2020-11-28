	<?php get_header(); ?>

       	    <div class="jumbotron blog text-center">
            <h1 class="display-4 text-white animate__animated animate__backInDown">Blog</h1>
        </div>
       
        <!-- main -->        
        <section class="main container py-5">
            <div class="row">
                <div class="col-md-8">
                   
                   <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   	<article class="blog-post pb-5">
                   		<div class="featured-image">
                   			<?php the_post_thumbnail(); ?>
                   		</div>
                   		<div class="text">
                            <h3><?php the_title(); ?></h3>
                            <p class="meta"><?php _e(get_the_date('F j, Y'));?> | <?php the_author(); ?></p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn"><?php _e('Procitaj Vise'); ?></a>
                        </div>
					</article>
                   
                   <?php endwhile; else : ?>
                   	<?php _e('No posts found'); ?>
                   	<?php endif; ?>

                  
                    
                    
                </div>  
                <div class="col-md-4 sidebar">
                  <?php get_sidebar(); ?>
                </div> 
            </div>
        </section>

       <?php get_footer(); ?>