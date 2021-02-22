<?php 
  $front = get_field( 'content', get_post(36)->ID );
  $icon = $front['icon']['url'];
  $phone = $front['phone'];
  $title = get_the_title(get_queried_object_id());
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Teq</title>
    <style>
      .header__links ul li{
        display: inline-block;
        list-style-type: none;
      }
      .header__links ul{
        margin: 0 auto;
        padding-inline-start: 0px;
      }
      .header__links ul li{
        margin-left: 20px;
      }

    </style>
  </head>
  <body>
    <header class="<?php if($title === 'Главная') echo "main__header";?> header" style="background: url( 
    <?php if($title !== 'Главная') 
      bloginfo('template_directory')?>/img/header-bg.jpg)">
      <div class="header__inner">
        <a href="" class="header__logo"><img src="<?php echo $icon; ?>" alt="" /></a>
        <div class="header__links">
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'top-menu',
                'container' => 'a',
              )
            );
          ?>
          
        </div>
        <div class="header__contacts">
          <img src="<?php bloginfo('template_directory'); ?>/img/call.svg" alt="" />
          <a href="" class="header__link"><?php  echo $phone; ?></a>
        </div>
      </div>
    </header>
