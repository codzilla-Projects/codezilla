    <!-- ==================== Start Footer ==================== -->

    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
 
         
          
          <div class="col-lg-3 col-md-6 footer-info">
<!--            <img src="<?=get_option('codzilla_logo_light'); ?>" alt="codezilla">-->
            <h3><?php _e('Codezilla','codzilla'); ?></h3>
            <p><?php _e('With Codezilla, you will lead your industry. Codezilla is your business partner, who does care about your business success just as you do. We are in the same boat, heading towards a brighter future','codzilla'); ?></p>
          </div>
          
           <div class="col-lg-3 col-md-6 footer-links">
            <h4><?php _e('Useful Links','codzilla'); ?></h4>
            <?php if( is_rtl() ){?>
                <ul>
                  <li><i class="fas fa-chevron-left"></i> <a href="<?php bloginfo('url');?>">الرئيسية</a></li>
                  <li><i class="fas fa-chevron-left"></i> <a href="<?php bloginfo('url');?>/من-نحن">من نحن</a></li>
                  <li><i class="fas fa-chevron-left"></i> <a href="<?php bloginfo('url');?>/الأعمال/">الأعمال</a></li>
                  <li><i class="fas fa-chevron-left"></i> <a href="<?php bloginfo('url');?>/تواصل-معنا/">تواصل معنا</a></li>
                </ul>
            <?php }else{ ?>
                <ul>
                  <li><i class="fas fa-chevron-right"></i> <a href="<?php bloginfo('url');?>">Home</a></li>
                  <li><i class="fas fa-chevron-right"></i> <a href="<?php bloginfo('url');?>/about-us">About us</a></li>
                  <li><i class="fas fa-chevron-right"></i> <a href="<?php bloginfo('url');?>/our-portfolio">Portfolio</a></li>
                  <li><i class="fas fa-chevron-right"></i> <a href="<?php bloginfo('url');?>/contact-us">Contact us</a></li>
                  <li><i class="fas fa-chevron-right"></i> <a href="<?php bloginfo('url');?>/company-profile">Company Profile</a></li>
                </ul>
            <?php } ?>
          </div>
            
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4><?php _e('Contact Us','codzilla'); ?></h4>
            <p>
                <?php $location = get_option('codzilla_location');  
                 $location_ar = get_option('codzilla_location_ar');  
                    if(!empty($location)) :
                ?>
                <strong><i class="fas fa-map-marker-alt"></i> <?php if( ! is_rtl() ){echo $location;}else{echo $location_ar;}?></strong>
                <?php endif; ?>
                <?php $phone = get_option('codzilla_phone');  
                    if(!empty($phone)) :
                ?>
                  <strong><i class="fas fa-phone"></i><a href="tel:<?=$phone; ?>"><?=$phone; ?></a> </strong>
                <?php endif; ?>
                <?php $mail = get_option('codzilla_email');  
                    if(!empty($mail)) :
                ?>
                  <strong><i class="fas fa-envelope"></i> <a href="mailto:<?=$mail; ?>"><?=$mail; ?></a></strong>
                <?php endif; ?>
            </p>
            <div class="footer-newsletter">
              
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="<?php _e('Subscribe','codzilla'); ?>">
                </form>
                <div class="social-links mt-20">
                 <?php $facebook = get_option('codzilla_fb');  
                    if(!empty($facebook)) :
                    ?>
                        <a href="<?= $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php $twitter = get_option('codzilla_twitter');  
                    if(!empty($twitter)) :
                    ?>
                        <a href="<?= $twitter; ?>"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php $instagram = get_option('codzilla_insta');  
                        if(!empty($instagram)) :
                    ?>
                        <a href="<?= $instagram; ?>"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>

                    <?php $youtube = get_option('codzilla_youtube');  
                    if(!empty($youtube)) :
                    ?>
                        <a href="<?= $youtube; ?>"><i class="fab fa-youtube"></i></a>
                    <?php endif; ?>
                    <?php $whatsapp = get_option('codzilla_whatsapp');  
                    if(!empty($whatsapp)) :
                    ?>
                        <a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp; ?>&text=I want to inquire about"><i class="fab fa-whatsapp"></i></a>
                    <?php endif; ?>
                </div>
            </div>
          </div>
            
         <?php if( ! wp_is_mobile() ): ?>
             <div class="col-lg-3 col-md-6 footer-links">
                <div class="fb-page" data-href="https://www.facebook.com/codezillaeg" data-tabs="timeline" data-width="" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/codezillaeg" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/codezillaeg">Codezilla</a></blockquote></div>
              </div> 
            
         <?php endif;?>
           
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       <?php _e('Codezilla','codzilla'); ?> &copy; <?= date('Y'); ?> <strong><?php _e('All Rights Reserved ','codzilla'); ?></strong>. 
      </div>
      <div class="credits">
        <?php _e('Designed & Developed by','codzilla'); ?> <a href="<?php bloginfo('url'); ?>"><img class="lazyload" data-src="<?= CODZILLA_URL;?>assets/img/codezilla-line-white1.svg" alt="codezilla" width="25" height="25"> <?php _e('Codezilla','codzilla'); ?></a>
      </div>
    </div>
  </footer>

    <!-- ==================== End Footer ==================== -->


    </div>

   <?php wp_footer(); ?>

   
  <script type="text/javascript">
      var c4 = $('.skills-circle .skill');
    var myVal = $(this).attr('data-value');

    $(".skills-circle .skill").each(function () {

        c4.circleProgress({
            startAngle: -Math.PI / 2 * 1,
            value: myVal,
            thickness: 2,
            size: 110,
            fill: { color: "<?= get_option('codzilla_primaryColor'); ?>" }
        });
    });
    var wind = $(window);

    wind.on("scroll", function () {

        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar.change .logo> img");

        if (bodyScroll > 300) {

            navbar.addClass("nav-scroll");
            logo.attr('src', '<?= get_option('codzilla_logo_sticky'); ?>');

        } else {

            navbar.removeClass("nav-scroll");
            logo.attr('src', '<?= get_option('codzilla_logo_light'); ?>');
        }
    });
    $('.navbar .search .icon').on('click', function () {
        $(".navbar .search .search-form").fadeIn();
    });

    $('.navbar .search .search-form .close').on('click', function () {
        $(".navbar .search .search-form").fadeOut();
    });
  </script>
<script src="<?= CODZILLA_URL;?>assets/js/lazysizes.min.js" async></script>
<script src="<?= CODZILLA_URL;?>assets/js/xplugin.min.js" defer></script>
<script src="<?= CODZILLA_URL;?>assets/js/xscript.min.js" defer></script>

<?php if( ! wp_is_mobile() ): ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="bCfeunrt"></script>
<?php endif;?>
<div style="display:none;">
<div itemscope itemtype="https://codzilla.net/LocalBusiness">
  <h2><span itemprop="name">Codezilla | One-Stop Solution</span></h2>
  <span itemprop="description">Codezilla is an outstanding digital solutions company in the MENA Region. Codezilla is the moment of converting dreams to reality by merging creativity, innovation, professionalism and quality of hard and smart work.</span>
  <div itemprop="address" itemscope itemtype="https://codzilla.net/PostalAddress">
    <span itemprop="streetAddress">Alex-Cairo agriculture road, Gardenia Buildings. No (C). 6th floor</span>
    <span itemprop="addressLocality">Tanta, Egypt</span>,
  </div>
  Phone: <span itemprop="telephone">+2-01000565608</span>
  Phone: <span itemprop="telephone">+2-01100571138</span>
  <div itemprop="aggregateRating" itemscope itemtype="https://codzilla.net/AggregateRating">
    <span itemprop="ratingValue">4.9</span> stars -
    based on <span itemprop="reviewCount">50</span> reviews
  </div>
</div>
</div>
</body>

</html>