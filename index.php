<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package courstore.com
 */

get_header();
global $wp;
$el = home_url( add_query_arg( array(), $wp->request ) );
$object = null;
$page = -1;
if(strpos($el,'service-post')) $page = 42;
else if(strpos($el,'solution-post'))	$page = 44;
else if(strpos($el,'news-post'))	$page = 46;
$current_url = explode('/', $el);
$object = get_field( 'blocks' , $page )[$current_url[count($current_url)-1]];
?>

	<main id="primary" class="site-main">
		<div class="content-wrapper">
			<?php if($object) {?>

					<section class="news-in">
							<div class="container">
								<div class="news-in__inner">
									<div class="title">
										<?php echo $object['title'];?>
									</div>
									<div class="news-in__img">
										<img src="<?php echo $object['image']['url'];?>" alt="" />
									</div>
									<div class="news-in__wrap">
										<div class="news-in__box">
											<!-- <div class="news-in__title">
												<?php echo $object['title'];?>
											</div> -->
										<div class="news-in__descr">
											<?php echo $object['description'];?>
										</div>
									</div>

									<!-- Либо socials Либе же pdf download -->
									<?php if($page === 42 || $page === 46) {?>
										<div class="news-in__social">
											<?php 
												$ar = $object['social_links'];
												if($ar){
													foreach($ar as $val){
														echo $val["icon"];
											?>
												<a href="<?php echo $val["link"]; ?>" target="_blank" class="news-in__link"
													><img src="<?php echo $val["logo"]['url']; ?>" alt=""
												/></a>
												<?php }}else{?>
													<span>Сcылки не указаны</span>
												<?php }?>
										</div>
										
									<?php } else{ ?>

										<div class="news-in__pdf">
											<?php if($object["file"]) { ?>
												<a href="<?php echo $object["file"]['url']; ?>" download>
													<button class="news-in__pdf-download">Скачать Pdf файл</button>
												</a>
											<?php } else {?>
												<a>
													<button class="news-in__pdf-download">Скачать Pdf файл</button>
												</a>
											<?php }?>
										</div>
									<?php } ?>
								</div>
							</div>
					</section>


			<?php }?>
		</div>
	</main>

<?php
// get_sidebar();
get_footer();