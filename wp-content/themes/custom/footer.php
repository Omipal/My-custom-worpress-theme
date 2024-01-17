<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom
 */

?>
<div class="sides">
		<div class=" container-fluid ">
				<div class="left-side">
						<div class="side-content">
							<?php if(get_theme_mod( 'facebook', '' )){ ?>
							
								<a href="<?php echo get_theme_mod( 'facebook', ''); ?>"> Facebook </a>
								<?php } ?>
								<?php if(get_theme_mod( 'twitter', '' )){ ?>
							
							<a href="<?php echo get_theme_mod( 'twitter', ''); ?>"> Twitter </a>
							<?php } ?>
							<?php if(get_theme_mod( 'instagram', '' )){ ?>
							
							<a href="<?php echo get_theme_mod( 'instagram', ''); ?>"> Instagram </a>
							<?php } ?>
							<?php if(get_theme_mod( 'behance', '' )){ ?>
							
							<a href="<?php echo get_theme_mod( 'behance', ''); ?>"> Behance </a>
							<?php } ?>
						</div>
				</div>

				<div class="right-side">
						<div class="side-content">
								<p class="copyright">
										<?php echo get_theme_mod( 'copyright text', '' ); ?></p>
						</div>
				</div>
		</div>
</div> <!-- sides -->

</div> <!-- atail -->

<?php wp_footer(); ?>

</body>
</html>
