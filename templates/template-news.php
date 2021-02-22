<?php
	get_header();
	/*
		Template Name: News
  */
  
  global $wp;
  $el = home_url( add_query_arg( array(), $wp->request ) );
  $current_url = explode('/', $el);
  $page = $current_url[count($current_url)-1];

  if(!is_numeric($page)) {
      $page = 1;
  } 
  $subtitle         = get_field('subtitle' ,get_queried_object_id());
  $title            = get_field('title' ,get_queried_object_id());
  $description      = get_field('description' ,get_queried_object_id());
  $row              = 0;
  $images_per_page  = 9; 
  $images           = get_field( 'blocks' , get_queried_object_id() );
  $total            = count($images);
  $pages            = ceil( $total / $images_per_page );
  $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
  $max              = ( $min + $images_per_page ) - 1;
  $numbers          = 0;
?>
<div class="news-page same-page">
<section class="news section">
    <div class="container">
      <div class="suptitle"><?php echo $subtitle; ?></div>
      <div class="title"><?php echo $title; ?></div>
      <div class="descr">
        <?php echo $description; ?>
      </div>
      <div class="news-inner">
        <?php if( have_rows( 'blocks', get_queried_object_id() ) ) : ?>

          <?php while( have_rows( 'blocks', get_queried_object_id() ) ): the_row();

              $row++;
              if($row < $min) { continue; }

              if($row > $max) { break; } 
          ?>
              <div class="services__item">
                <a href="<?php echo esc_url(site_url()); ?>/news-post/<?php echo $numbers; ?>">
                <div class="services__box services__box1" style="background-image: url(<?php echo get_sub_field('image')['url']; ?>)">
                  <div class="services__title">
                    <?php echo get_sub_field('title'); ?>
                  </div>
                  <div class="services__subtitle">
                    <?php echo get_sub_field('date'); ?>
                  </div>
                  <div class="services__arrow">
                    <img src="<?php bloginfo('template_directory'); ?>/img/services-arrow.svg" alt="" />
                  </div>
                </div>
                </a>
              </div>
            <?php $numbers++; ?>
          <?php endwhile;

            ?>

          <?php endif; ?>
          <?php 
          // Pagination
          $big = 999999999;
          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?page=%#%',
            'current' => $page,
            'total' => $pages,
            'prev_text'    => __('<span><<</span>'),
            'next_text'    => __('<span>>></span>'),
          ) );
          ?>
        
      </div>
    </div>
</section>
</div>
<?php
	get_footer();
?>