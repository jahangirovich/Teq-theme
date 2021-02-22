<?php
	get_header();
	/*
		Template Name: Vacancy
  */
  global $wp;
  $el = home_url( add_query_arg( array(), $wp->request ) );
  $current_url = explode('/', $el);
  $page = $current_url[count($current_url)-1];

  if(!is_numeric($page)) {
      $page = 1;
  } 
  $subtitle2        = get_field('subtitle2' ,get_queried_object_id());
  $title            = get_field('title' ,get_queried_object_id());
  $title2           = get_field('title2' ,get_queried_object_id());
  $description      = get_field('description' ,get_queried_object_id());
  $description2     = get_field('description2' ,get_queried_object_id());
  $vacancy          = get_field('vacancy' ,get_queried_object_id());
  $row              = 0;
  $images_per_page  = 6; 
  $images           = get_field( 'blocks' , get_queried_object_id() );
  $total            = count($images);
  $pages            = ceil( $total / $images_per_page );
  $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
  $max              = ( $min + $images_per_page ) - 1;
?>
<div class="vacancy-page same-page">
<section class="vacancy">
      <div class="container">
        <div class="vacancy__inner">
          <div class="title"><?php echo $title; ?></div>
          <div class="descr">
            <?php echo $description; ?>
          </div>
          <div class="vacancy__items">
              <?php if( have_rows( 'blocks', get_queried_object_id() ) ) : ?>

                <?php while( have_rows( 'blocks', get_queried_object_id() ) ): the_row();

                    $row++;
                    if($row < $min) { continue; }

                    if($row > $max) { break; } 
                ?>
                <div class="vacancy__item">
                      <div class="vacancy__item-wrap">
                        <div class="vacancy__item-title">
                          <?php echo get_sub_field('title'); ?>
                        </div>
                        <div class="vacancy__item-name">
                          <?php echo get_sub_field('description'); ?>
                        </div>
                        <div class="vacancy__item-date"> <?php echo $date; ?></div>
                        <div class="vacancy__item-content">
                            
                          <div class="vacancy__item-box">
                            <div class="vacancy__item-suptitle">Задачи</div>
                            <div class="vacancy__item-descr">
                              <?php if( have_rows( 'solutions', get_queried_object_id() ) ) : ?>

                                <?php while( have_rows( 'solutions', get_queried_object_id() ) ): the_row();
                                    
                                ?>
                                <p><?php echo get_sub_field('description'); ?></p>

                                <?php endwhile;

                                ?>

                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="vacancy__item-box">
                            <div class="vacancy__item-suptitle">требования</div>
                            <div class="vacancy__item-descr">
                              <?php if( have_rows( 'requires', get_queried_object_id() ) ) : ?>

                                <?php while( have_rows( 'requires', get_queried_object_id() ) ): the_row();
                                    
                                ?>
                                <p><?php echo get_sub_field('description'); ?></p>

                                <?php endwhile;

                                ?>

                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="vacancy__item-box">
                            <div class="vacancy__item-suptitle">Условия</div>
                            <div class="vacancy__item-descr">
                              <?php if( have_rows( 'condition', get_queried_object_id() ) ) : ?>

                                <?php while( have_rows( 'condition', get_queried_object_id() ) ): the_row();
                                    
                                ?>
                                <p><?php echo get_sub_field('description'); ?></p>

                                <?php endwhile;

                                ?>

                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="vacancy__item-right">
                        <div class="vacancy__item-salary">
                          <?php if(!empty(get_sub_field('earns'))){ 
                              echo get_sub_field('earns');
                          ?>
                          <?php } else{?>
                          Зарплата не указана
                          <?php }?>
                        </div>
                        <div class="vacancy__item-btn">
                          <img src="<?php bloginfo('template_directory'); ?>/img/vacancy-btn.svg" alt="" />
                        </div>
                      </div>
                    </div>

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
      </div>
    </section>
    <section class="request" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/request-bg.jpg)">
      <div class="container">
        <div class="request__inner">
          <div class="request__wrap">
            <div class="suptitle"><?php echo $subtitle2; ?></div>
            <h2 class="title"> <?php echo $title2; ?></h2>
            <div class="descr">
              <?php echo $description2; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php
	get_footer();
?>
<!-- Задачи:

- установление деловых партнерских отношений с представителями ТТ на вверенной территории;
- выполнение ежемесячного плана продаж;
- поддержка маркетинговых активностей по программам;
- формирование заявок;
- контроль выкладки и наличия товара на полках в магазинах;
- контроль дебиторской задолженности;
- ведение отчетности по продажам;
- осуществление контроля над исправной работой GPS треккера и КПК;

Требования:

- опыт работы в компаниях сферы FMCG на аналогичной должности от 1 года;
- высшее либо среднее профессиональное образование;
- презентабельный внешний вид;
- поставленная грамотная речь;
- лидерство, нацеленность на результат, способность принимать самостоятельные  решения на основе имеющихся данных и нести ответственность за результат;
- знание основ продаж, умение вести переговоры;
- желание зарабатывать более 250 000 тенге в месяц;

Условия:

- Работа в успешной, стабильной компании;
- Продажа любимого Казахстанцами качественного продукта;
- Карьерный рост;
- Обучение, адаптация;
- Оплачиваемая стажировка;
- Пятидневная рабочая неделя;
- График работы с 8:00 до 17:00;
- Оформление согласно ТК РК;
- Оклад + бонусы от продаж по системе KPI. -->