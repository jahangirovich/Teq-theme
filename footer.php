<?php
  $about_page = 39;
  $contact_page = 52;
  $front_page = 36;
  $content = get_field( 'content' , $about_page);
  $footer =  get_field( 'footer' , $front_page);
?>
<style>
  .footer__links ul li{
    display: block;
    list-style-type: none;
  }
  .footer__links ul{
    margin: 0 auto;
    padding-inline-start: 0px;
  }
  
</style>

    <footer class="footer">
      <div class="container">
        <div class="footer__inner">
          <div class="footer__item">
            <div class="footer__title"><?php echo $content['small_title']?></div>
            <div class="footer__descr">
              <?php  echo $footer['description'];  ?>
            </div>
            <div class="footer__socials">
                <?php
                  if( have_rows('social_links', $front_page) ): ?>        
                    <?php while( have_rows('social_links', $front_page) ): the_row(); ?>
                                  
                        
                    <a class="footer__social" href="<?php echo get_sub_field('link'); ?>" target="_blank"
                        ><img src="<?php echo get_sub_field('icon')['url']; ?>" alt=""
                      /></a>
                        
                    <?php endwhile; ?>
                        
                <?php endif; ?>
              
            </div>
          </div>
          <div class="footer__item">
            <div class="footer__title"><?php echo $content['big_title']?></div>
            <div class="footer__links">
              <div>
                <?php 

                  wp_nav_menu(
                    array(
                      'theme_location' => 'top-menu',
                      'container' => 'a',
                      'link_before' => "<img src='" . get_stylesheet_directory_uri() ."/img/footer-arrow.svg' alt='' />"
                    )
                  );
                ?>
                <!-- <a href="" class="footer__link"
                  ><img src="<?php bloginfo('template_directory'); ?>/img/footer-arrow.svg" alt="" /> о компании</a
                >
                <a href="" class="footer__link"
                  ><img src="<?php bloginfo('template_directory'); ?>/img/footer-arrow.svg" alt="" />Услуги</a
                >
                <a href="" class="footer__link"
                  ><img src="<?php bloginfo('template_directory'); ?>/img/footer-arrow.svg" alt="" />решения</a
                >
                <a href="" class="footer__link"
                  ><img src="<?php bloginfo('template_directory'); ?>/img/footer-arrow.svg" alt="" />новости</a
                >
                <a href="" class="footer__link"
                  ><img src="<?php bloginfo('template_directory'); ?>/img/footer-arrow.svg" alt="" />Вакансии</a
                > -->
              </div>
              
            </div>
          </div>
          <div class="footer__item">
            <div class="footer__title"><?php echo get_field( 'title2' ,$contact_page); ?></div>
            <div class="footer__wrap">
              <div class="footer__suptitle">Адрес</div>
              <div class="footer__description">
                  <?php echo get_field( 'address' ,$contact_page); ?>
              </div>
            </div>
            <div class="footer__wrap">
              <div class="footer__suptitle">Телефон</div>
              <div class="footer__description"><?php echo get_field( 'current_phone' ,$contact_page); ?></div>
            </div>
            <div class="footer__wrap">
              <div class="footer__suptitle">email</div>
              <div class="footer__description"><?php echo get_field( 'current_mail' ,$contact_page); ?></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <section class="teq">
      <div class="container">
        <div class="teq__inner">
          <p class="teq__descr"><?php  echo $footer['company'];  ?></p>
          <p class="teq__descr"><?php  echo $footer['company_desc'];  ?></p>
        </div>
      </div>
    </section>
    <input type="hidden" value="<img src='<?php bloginfo('template_directory'); ?>/img/thank-arrowLeft.svg'>" id="icon_left"/>
    <input type="hidden" value="<img src='<?php bloginfo('template_directory'); ?>/img/thank-arrowRight.svg'>" id="icon_right"/>
    <?php wp_footer(); ?>
    
  </body>
</html>