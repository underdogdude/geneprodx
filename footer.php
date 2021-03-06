</div>
<!--#content-->


<aside id="footbar" class="site-footbar">
    <div class="s-container">
        <?php dynamic_sidebar( 'footbar' ); ?>
    </div>
</aside>
<footer id="colophon" class="site-footer">
    <div class="s-container">
        <div class="site-info">
            &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
        </div>
    </div>
</footer>

</div>
<!--#page-->


<?php /* FOR SITE-MEMBER */ ?>
<div class="s-modal-bg"></div>
<?php if($GLOBALS['s_member_url'] != 'none') : ?>
<div class="s-modal s-modal-login" data-s-modal="site-login">
    <span class="s-modal-close"><?php seed_icon('x'); ?></span>
    <?php get_template_part( 'template-parts/account', 'login' ); ?>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<script src="//code.tidio.co/jcyvhpylixd879vv3tdgs277mmubemay.js" async></script>
</body>

</html>