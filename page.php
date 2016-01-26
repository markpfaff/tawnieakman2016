<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package tawnieakman
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="breadcrumb">
                    
            <?php 
            // if there is a parent, display the link
            $parent_title = get_the_title( $post->post_parent );
            if ( $parent_title != the_title( ' ', ' ', false ) ) {
                echo '<a href="' . get_permalink( $post->post_parent ) . '" title="' . $parent_title . '">' . $parent_title . '</a> » ';
            } 
            // then go on to the current page link
            ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?></a> »
            </div>
			<?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if( is_page( 'about' )){//page id 15 is about 
    
    get_sidebar('about');//About sidebar is created in functions.php under register_sidebar
   
    }
?>        
<!--    <small>page.php</small>        -->
<?php get_footer(); ?>
