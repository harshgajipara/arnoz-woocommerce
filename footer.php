 <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <?php wp_nav_menu(array(
                                'theme_location'=>'footerMenuLocation1',
                            ));
                             ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                             <?php wp_nav_menu(array(
                                'theme_location'=>'footerMenuLocation2',
                            ));
                             ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <?php wp_nav_menu(array(
                                'theme_location'=>'footerMenuLocation3',
                            ));
                             ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <?php wp_nav_menu(array(
                                'theme_location'=>'footerMenuLocation4',
                            ));
                             ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                          <?php echo do_shortcode('[mc4wp_form id="51"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <?php $social = get_field('social_link','option'); ?>
                                <li><a href="<?php echo $social['facebook']; ?>" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $social['twitter']; ?>" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo $social['globe']; ?>" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="<?php echo $social['behance']; ?>" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

   <?php wp_footer(); ?>
</body>

</html>