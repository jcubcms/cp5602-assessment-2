</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
<div class="container">
    <div class="col-md-4 footer-one">
    	<?php if ( is_active_sidebar( 'footer-one' ) ) { dynamic_sidebar( 'footer-one' ); } ?>
    </div>
    <div class="col-md-4 footer-two">
    	<?php if ( is_active_sidebar( 'footer-two' ) ) { dynamic_sidebar( 'footer-two'); } ?>
    </div>
    <div class="col-md-4 footer-four">
    	<?php if ( is_active_sidebar( 'footer-four' ) ) { dynamic_sidebar( 'footer-four' ); } ?>
    </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>