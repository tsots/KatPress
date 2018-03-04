<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<div class="footer-container">
	<footer class="footer">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
