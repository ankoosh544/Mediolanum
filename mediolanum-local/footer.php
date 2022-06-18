<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('storefront_before_footer'); ?>

<footer id="colophon" class="site-footer " role="contentinfo">
    <?php get_template_part('Template/_footer') ?>
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/bootstrap/js/customizer.js?ver=<?php echo $_ver;?>"><?php var_dump($_ver);?></script>
<div class="footer-bottom2 col-12">
    <div class="container">
        <div class="col-12 no-margin">
    <div class="col-md-8 col-sm-6"><p class="text-footer " >P.IVA: 06513280963 | Copyright @2021 <a style="color: white;" target="_blank" href="https://www.acconsulting.digital/"> AC Consulting </a> - All Rights Reserved</p></div>
    <div class="col-md-4  col-sm-6"><p class="text-footer ">Privacy Policy | Cookie Policy</p></div>
        </div>
        </div>
    </div>





<script>

    $(document).ready(function(){
        $(".navbar").css({"background-color": "transparent"});
        $('body').scroll({ target: '#navbar' });


        $(".navbar-collapse ul li a[href^='#'], .scroll-animate").on('click',function(e){

            target = this.hash;
            e.preventDefault();

            $('html,body').animate({
                scrollTop : $(this.hash).offset().top
            }, 600, function(){
                window.location.hash = target;
            });

            $(".navbar-collapse").collapse('hide');

        });

        var scroll = 0;
        $(document).scroll(function(){
            scroll = $(this).scrollTop();

            if(scroll > 20){


                if (screen.width < 767) {
                    $(".navbar").css({"background-color": "#f5f5f5", "margin-top" : "0px"});
                    $(".logo-container").css({"margin-top" : "-3px"});
                    $(".height_rc").css({"padding-top" : "0px ","padding-bottom" : "0px"});
                    $(".logo-container a img").css({"width" : "70%","margin-left" : "20px", "padding-top": "61px "});
                     $(".navbar-inverse .navbar-toggle").css({"margin-top" : "0px"});

                }
                else {
                        //desktop
                        $(".navbar").css({"background-color": "#f5f5f5", "margin-top" : "20px","min-height": "87px"});
                        $(".logo-container").css({"margin-top" : "-3px","width" : "190px"});
                        $(".height_rc").css({"padding-top" : "0px ","padding-bottom" : "0px"});
                        $(".logo-container a img").css({"width" : "70%","margin-left" : "20px", "padding-top": "21px ", "padding-bottom": "10px"});
                    $("#menu-menu").css({"padding-top": "10px","height": "79px"});
                    $(".navbar-inverse .navbar-toggle").css({"margin-top" : "-5px"});
                    $("#menu-menu").css({"padding-top": "10px"});
                    }


            } else {
                if (screen.width < 767) {
                    $(".navbar").css({"background-color": "transparent", "margin-top" : "20px"});
                    $(".logo-container a img").css({"width" : "100%"});
                    $(".logo-container").css({"margin-top" : "-23px"});

                }
                else {
                    //desktop
                    $(".navbar").css({"background-color": "transparent", "margin-top" : "40px"});
                    $(".logo-container a img").css({"width" : "100%"});
                    $(".logo-container").css({"margin-top" : "-13px"});
                    $("#menu-menu").css({"padding-top": "10px"});

                }

            }

        });
    });




</script>

</body>
</html>

