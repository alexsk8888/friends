<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OptiGel
 */
global $display_pc;
global $display_mob;
?>

	<footer  class="site-footer">

	</footer>
</div><!-- #page -->

<div id="mobile_screen" <?php echo $display_mob ?> >
    <?php include_once('templates/mobile_content.php')  ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
