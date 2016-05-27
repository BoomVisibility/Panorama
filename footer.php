<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer class="global" role="contentinfo">
	<div class="container">

			<div class="one_fourth">
			<div class="side-divider"></div>
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				<?php endif; ?>
			</div>
			<div class="one_fourth">
			<div class="side-divider"></div>
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				<?php endif; ?>
			</div>
			<div class="one_fourth">
			<div class="side-divider"></div>
				<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				<?php endif; ?>
				
			</div>
			<div class="one_fourth last">
				<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
				<?php endif; ?>
			</div>
			<div class="clear"></div>
				<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-8' ); ?>
				<?php endif; ?>

	</div>

<div class="clear"></div>		
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<noscript id="deferred-styles">
      <link href='https://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
</body>
</html>
