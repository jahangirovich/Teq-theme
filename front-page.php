<?php 
  get_header();
  $about_page = 39;
  $service_page = 42;
  $solution_page = 44;
  $news_page = 46;
  $contact_page = 52;
  $content = get_field( 'content' , $about_page);
  $partners = get_field( 'partners' , $about_page);
  $letter = get_field( 'letter' , $about_page);
?>
  
    <section class="mains">
      
      <div class="main__social">
        <?php
          if( have_rows('social_links', get_queried_object_id()) ): ?>        
            <?php while( have_rows('social_links', get_queried_object_id()) ): the_row(); ?>
                          
                
                <a href="<?php echo get_sub_field('link'); ?>" class="main__social-link"
                    target="_blank"><img src="<?php echo get_sub_field('icon')['url']; ?>" alt=""
                  /></a>
                
            <?php endwhile; ?>
                
        <?php endif; ?>
      </div>
      <div class="main__slider">
        <?php
            if( have_rows('slider', get_queried_object_id()) ): ?>        
            <?php while( have_rows('slider', get_queried_object_id()) ): the_row(); ?>
              <section class="main" style="background-image: url(<?php echo get_sub_field('background')['url'] ?>)">
                <div class="container">
                  <div class="main__title"><?php echo get_sub_field('title'); ?></div>
                  <div class="main__subtitle">
                    <?php echo get_sub_field('description'); ?>
                  </div>
                  <button class="button">Оставить заявку</button>
                </div>
              </section>
                
            <?php endwhile; ?>
                
        <?php endif; ?>
      </div>
    </section>
    <section class="company section">
      <div class="container">
        <div class="company__inner">
          <div class="company__wrap">
            <div class="suptitle"><?php echo $content['small_title']; ?></div>
            <h2 class="title"><?php echo $content['big_title']; ?></h2>
            <div class="company__descr">
              <?php echo $content['text1']; ?>
            </div>
            <button class="button">Подробнее</button>
          </div>
          <div class="company__img">
            <img src="<?php echo $content['image']['url']; ?>" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/main-bg.jpg)">
      <section class="services section">
        <div class="container">
          <div class="services__inner">
            <div class="suptitle"><?php echo get_field( 'subtitle' , $service_page); ?></div>
            <h2 class="title"><?php echo get_field( 'title' , $service_page); ?></h2>
            <div class="descr">
              <?php echo get_field( 'description' , $service_page); ?>
            </div>
            <div class="services__slider">
              <?php 
                $content = get_field( 'blocks' , $service_page);
                $numbers = 0;
                foreach($content as $var){
                  if($numbers >= 5) break;
                  $numbers++;
                  
              ?>
              <a href="<?php echo esc_url(site_url()); ?>/service-post/<?php echo $numbers; ?>">
              <div class="services__item">
                <div class="services__box services__box1" style="background-image: url(<?php echo $var['image']['url']; ?>);background-size: cover;">
                  <div class="services__title">
                    <?php echo $var['title']; ?>
                  </div>
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
              </div>
              </a>
              <?php }?>
            </div>
          </div>
        </div>
      </section>
      <section class="decision section">
        <div class="container">
          <div class="services__inner">
              <div class="suptitle"><?php echo get_field( 'subtitle' , $solution_page); ?></div>
              <h2 class="title"><?php echo get_field( 'title' , $solution_page); ?></h2>
              <div class="descr">
                <?php echo get_field( 'description' , $solution_page); ?>
              </div>
              <div class="services__slider">
                <?php 
                  $content = get_field( 'blocks' , $solution_page);
                  $numbers = 0;
                  foreach($content as $var){
                    
                ?>
                <a href="<?php echo esc_url(site_url()); ?>/solution-post/<?php echo $numbers; ?>">
                <div class="services__item">
                  <div class="services__box services__box1" style="background-image: url(<?php echo $var['image']['url']; ?>);background-size: cover;">
                    <div class="services__title">
                      <?php echo $var['title']; ?>
                    </div>
                    <div class="services__arrow">
                      <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                    </div>
                  </div>
                </div>
                <?php $numbers++; }?>
                </a>
              </div>
            </div>
        </div>
      </section>
      <section class="news section">
        <div class="container">
          <div class="suptitle"><?php echo get_field( 'subtitle' , $news_page); ?></div>
          <div class="title"><?php echo get_field( 'title' , $news_page); ?></div>
          <div class="descr">
                <?php echo get_field( 'description' , $news_page); ?>
          </div>
          <?php
                $news_ar = get_field( 'blocks' , $news_page); 

            ?>
          <div class="news__inner">
            <div class="news__wrap">
              <a href="<?php echo esc_url(site_url()); ?>/news-post/0">
                <div class="news__1 news__one" style="background-image: url(<?php echo $news_ar[0]['image']['url']; ?>)">
                  <div class="services__title">
                    <?php echo $news_ar[0]['title']; ?>
                  </div>
                  <!-- <div class="services__subtitle">
                    <?php echo $news_ar[0]['image']['url']; ?>
                  </div> -->
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
              </a>
              <a href="<?php echo esc_url(site_url()); ?>/news-post/1">
                <div class="news__2 news__two" style="background-image: url(<?php echo $news_ar[1]['image']['url']; ?>)">
                  <div class="services__title">
                    <?php echo $news_ar[1]['title']; ?>
                  </div>
                  <!-- <div class="services__subtitle">
                    Quis aliqua sunt nisi consece
                  </div> -->
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
              </a>
            </div>
            <div class="news__wrap">
              <a href="<?php echo esc_url(site_url()); ?>/news-post/2">
                <div class="news__2 news__three" style="background-image: url(<?php echo $news_ar[2]['image']['url']; ?>)">
                  <div class="services__title">
                  <?php echo $news_ar[2]['title']; ?>
                  </div>
                  <!-- <div class="services__subtitle">
                    Quis aliqua sunt nisi consece
                  </div> -->
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
              </a>
              <a href="<?php echo esc_url(site_url()); ?>/news-post/3">
                <div class="news__1 news__four" style="background-image: url(<?php echo $news_ar[3]['image']['url']; ?>)">
                  <div class="services__title">
                  <?php echo $news_ar[3]['title']; ?>
                  </div>
                  <!-- <div class="services__subtitle">
                    Quis aliqua sunt nisi consece
                  </div> -->
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
              </a>
            </div>
            <div class="news__wrap">
              <a href="<?php echo esc_url(site_url()); ?>/news-post/4">
                <div class="news__1 news__five" style="background-image: url(<?php echo $news_ar[4]['image']['url']; ?>)">
                  <div class="services__title">
                  <?php echo $news_ar[4]['title']; ?>
                  </div>
                  <!-- <div class="services__subtitle">
                    Quis aliqua sunt nisi consece
                  </div> -->
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
              </a>
              <a href="<?php echo esc_url(site_url()); ?>/news-post/5">
              <div class="news__2 news__sixe" style="background-image: url(<?php echo $news_ar[5]['image']['url']; ?>)">
                <div class="services__title">
                <?php echo $news_ar[5]['title']; ?>
                </div>
                <!-- <div class="services__subtitle">
                  Quis aliqua sunt nisi consece
                </div> -->
                <div class="services__arrow">
                  <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </section>
    <section class="partners section">
      <div class="container">
        <div class="partners__inner">
          <div class="suptitle">
            <?php echo $partners['subtitle']; ?>
          </div>
          <h2 class="title"><?php echo $partners['title']; ?></h2>
          <div class="descr">
            <?php echo $partners['description']; ?>
          </div>
          <div class="partners__slider">
            <?php
              $rows = 0;
              $req = $partners['list'];
              $entered= false;
              foreach($req as $val){

                if($rows%2 === 0) { ?>
                  <div class="partners__wrap">
                  <?php } ?>
                    <div class="partners__item">
                      <?php $img = $val['image']['url']; 
                            $title = $val['title']; ?>
                      <img src="
                        <?php echo $img; ?>" alt="<?php echo $title; ?>" style="object-fit: contain"/>
                      <div class="partners__title">
                        <?php echo $title; ?>
                      </div>
                    </div>
                <?php 
                if($rows % 2 == 1) {
                  ?>
                    </div>
                <?php }
                  if($rows >= 10) break;
                  $rows++;
                ?>
                <?php 
              } 
            ?>
          </div>
        </div>
      </div>
    </section>
    <section class="thank section">
      <div class="container">
        <div class="thank__inner">
          <div class="suptitle"><?php echo $letter['subtitle'];?></div>
          <h2 class="title"><?php echo $letter['title'];?></h2>
          <div class="thank__slider">
            <?php
                $rows = 0;
                $req = $letter['images'];
                $entered= false;
                foreach($req as $val){
              ?>
                <div class="thank__item">
                  <img src="<?php echo $val['image']['url']; ?>" alt="" style="object-fit: contain"/>
                </div>
              <?php
                }
              ?>        
          </div>
        </div>
      </div>
    </section>
    <section class="request" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/request-bg.jpg)">
      <div class="container">
        <div class="request__inner">
          <div class="request__wrap">
            <div class="suptitle"><?php echo get_field("subtitle1",$contact_page);?></div>
            <h2 class="title"><?php echo get_field("title1",$contact_page);?></h2>
            <form class="form" action="">
              <div class="checkbox">
                <?php echo get_field("description",$contact_page);?>
              </div>
              <input class="input" type="text" placeholder="<?php echo get_field("name",$contact_page);?>" />
              <input class="input" type="text" placeholder="<?php echo get_field("phone",$contact_page);?>" />
              <input class="input" type="text" placeholder="<?php echo get_field("mail",$contact_page);?>" />
              <button class="button">Отправить</button>
            </form>
          </div>
          
        </div>
      </div>
    </section>
<?php 
  get_footer();
?>