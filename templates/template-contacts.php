<?php
	get_header();
	/*
		Template Name: Contacts
  */
  $id = get_queried_object_id();
?>
<div class="decision-page same-page">
<section class="contacts">
  <div class="contacts__inner">
    <div class="contacts__maps">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d160183.28543178234!2d71.3393071413026!3d51.147862041959165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424580c47db54609%3A0x97f9148dddb19228!2z0J3Rg9GALdCh0YPQu9GC0LDQvSAwMjAwMDA!5e0!3m2!1sru!2skz!4v1613749597537!5m2!1sru!2skz"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
    <div class="contacts__wrap">
      <div class="suptitle"><?php echo get_field("subtitle1",$id);?></div>
      <div class="title"><?php echo get_field("title1",$id);?></div>
      <form class="form" action="">
        <div class="checkbox">
          <?php echo get_field("description",$id);?>
        </div>
        <input class="input" type="text" placeholder="<?php echo get_field("name",$id);?>" />
        <input class="input" type="text" placeholder="<?php echo get_field("phone",$id);?> " />
        <input class="input" type="text" placeholder="<?php echo get_field("mail",$id);?>" />
        <button class="button">Отправить</button>
      </form>
    </div>
    <div class="contacts__wrap">
      <div class="suptitle"><?php echo get_field("subtitle2",$id);?></div>
      <div class="title"><?php echo get_field("title2",$id);?></div>
      <div class="contacts__box">
        <div class="footer__wrap">
          <div class="footer__suptitle">Адрес</div>
          <div class="footer__description">
            <?php echo get_field("address",$id);?>
          </div>
        </div>
        <div class="footer__wrap">
          <div class="footer__suptitle">Телефон</div>
          <div class="footer__description"><?php echo get_field("current_phone",$id);?></div>
        </div>
        <div class="footer__wrap">
          <div class="footer__suptitle">email</div>
          <div class="footer__description"><?php echo get_field("current_mail",$id);?></div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<?php
	get_footer();
?>

