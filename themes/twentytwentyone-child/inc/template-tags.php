<?php
/**
*loading custom theme template tags
*/

function custom_wp_query(){
  
    $post_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    );

    $post_query = new WP_Query( $post_args );
   

	if( $post_query -> have_posts() ){
        ?>
        <div class="post-query">
         
		    <?php 
            while( $post_query -> have_posts() ) {
			    $post_query ->the_post();
                ?>
                
                    <?php the_post_thumbnail(); ?>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <?php the_excerpt(); ?>  
                
                <?php
            }
			wp_reset_postdata(); 
        ?>
        
        </div>
        <?php
        
    }
}
?>