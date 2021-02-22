<?php
	get_header();
	/*
		Template Name: About
  */
  
  $content = get_field( 'content' , get_queried_object_id());
  $partners = get_field( 'partners' , get_queried_object_id());
  $letter = get_field( 'letter' , get_queried_object_id());
?>
<div class="about-page">
<section class="company section">
  <div class="container">
    <div class="company__inner">
      <div class="company__wrap">
        <div class="suptitle"><?php echo $content['small_title']; ?></div>
        <h2 class="title"><?php echo $content['big_title']; ?></h2>
        <div class="company__descr">
          <?php echo $content['text1']; ?>
        </div>
      </div>
      <div class="company__img">
        <img src="<?php echo $content['image']['url']; ?>" alt="" />
      </div>
    </div>
    <div class="company__descr2">
      <?php echo $content['text2']; ?>
    </div>
  </div>
</section>
<section class="partners section">
  <div class="container">
    <div class="partners__inner">
      <div class="suptitle"><?php echo $partners['subtitle']; ?></div>
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
</div>
<?php
	get_footer();
?>