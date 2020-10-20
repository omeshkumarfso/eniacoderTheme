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



    
<!-- 
    <div class="content-area">
		<main id="skip-content" class="site-main" role="main">

        <div class="row">
					<div class="content_area col-lg-8 col-md-8">
						<section id="post_section">
							<?php
							if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/content' );
								endwhile;
								else :

									get_template_part( 'template-parts/post/content', 'none' );
								endif;
							?>
							<div class="navigation">
				                <?php
				                    // Previous/next page navigation.
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'eniacoder' ),
				                        'next_text'          => __( 'Next page', 'eniacoder' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'eniacoder' ) . ' </span>',
				                    ) );
				                ?>
				                <div class="clearfix"></div>
				            </div>
						</section>
					</div>
					<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				</div>
		</main>
	</div> -->

<?php 
// Define our WP Query Parameters
       $the_query = new WP_Query( 'posts_per_page=5' ); 
?>

<?php 
// Start our WP Query
        while ($the_query -> have_posts()) : 
             
// Display the Post Title with Hyperlink
?>
     contextarea
  
       <li>
           <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
       </li>
  
 
       <li>
           <?php 
// Display the Post Excerpt
                the_excerpt(__('(more…)')); 
          ?>
      </li>
<?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>

  
 

      </div>
    </section><!-- #faq -->


 <?php get_footer() ?>