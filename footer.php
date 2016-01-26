<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tawnieakman
 */
?>

	</div><!-- #content -->

    
    <div class="menu-social">
                <ul>
                    <li>
                        <a href="http://www.facebook.com"></a>
                    </li>
                    <li>
                        <a href="http://www.tumblr.com"></a>
                    </li>
                    <li>
                        <a href="http://www.twitter.com"></a>
                    </li>
                </ul>
    </div>
    
    <footer id="colophon" class="site-footer <?php if (is_front_page()){print ' front-page-footer';}?>" role="contentinfo">
		<div class="site-info">
                    <ul>
                        <li>
                            ©Copyright 2015 Tawni Eakman 
                        </li>
                        <li>
                           Web Design by Mark Pfaff 
                        </li>
                    </ul>
                </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if (is_front_page()){print '        
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span><div></li>
            <li><span>Image 04</span><div></li>
            <li><span>Image 05</span><div></li>
            <li><span>Image 06</span><div></li>
        </ul>';}?>
</body>

</html>
