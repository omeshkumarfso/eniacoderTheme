<?php 
  /* Template Name: Eniacoder Carrier

*/
  get_header(); ?>
  <br>
  <br>
  <br>
  <br>
  <br>



    <section id="carrier">
      <div class="container">
       
              <?php if ( is_home() && ! is_front_page() ) : ?>
		             <header class="page-header">
			              <h2 class="page-title"><?php single_post_title(); ?></h2>
		             </header>
	          <?php else : ?>
		            <header class="page-header">
			              <h3 class="page-title"><?php esc_html_e( 'Posts', 'eniacoder' ); ?></h3>
		            </header>
	          <?php endif; ?>

              
 
              <!-- <?php echo do_shortcode("[post_grid id='105']"); ?> -->














<!-- <?php



     $i= 1;
      while($i<5):
         $i++;
?>

              <div class="card" style="width: auto;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                         Some quick example text to build on the card title and make up the bulk of the card's content.
                         Some quick example text to build on the card title and make up the bulk of the card's content.
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<br>

<?php 
endwhile;
?> -->






<?php 
// Define our WP Query Parameters
       $the_query = new WP_Query( 'posts_per_page=5' ); 
?>

<?php 
// Start our WP Query
        while ($the_query -> have_posts()) : 
            $the_query -> the_post();
// Display the Post Title with Hyperlink
?>
     <div class="card" style="width: auto;">
     <div class="card-body">

     
         <h5 class="card-title">
           <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
         </h5>
     
  
      
     <p class="card-text">
           <?php 
// Display the Post Excerpt
              
              
              // the_excerpt(__('(more…)')); 
          ?>
      </p>

      <!-- <a href="#" class="btn btn-primary">Read More</a> -->
      <?php 

               the_content('Read on...');
      // global $post;
     
               echo '<a class="moretag" href=" . get_permalink($post->ID) .  ">Read more </a>';
                ?>
     </div>
      </div>
      <br>
<?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>

  
 

      </div>
    </section><!-- #faq -->


 <?php get_footer() ?>