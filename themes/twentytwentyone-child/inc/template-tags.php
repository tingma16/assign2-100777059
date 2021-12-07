<?php
/**
*loading custom theme template tags
*/

function cunstom_wp_query(){
  
    $test_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    );

    $test_query = new WP_Query( $post_args );
   

	if( $test_query -> have_posts() ){
        ?>
        <div class="post-query">
         
		    <?php 
            while( $test_query -> have_posts() ) {
			    $test_query ->the_post();
                ?>
                <div class="cell medium-6 large-4">
                    <?php the_post_thumbnail(); ?>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <?php the_excerpt(); ?>  
                </div>
                <?php
            }
			wp_reset_postdata(); 
        ?>
         </div>
        </div>
        <?php
        
    }
}
