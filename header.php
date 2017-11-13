<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<meta name="developer" content="<?php echo $_SERVER['SERVER_ADMIN'] ?>">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- BugHerd -->
	<script type='text/javascript'>
		(function (d, t) {
		  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
		  bh.type = 'text/javascript';
		  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=lmg3pxtej2tcmppbmhio0w';
		  s.parentNode.insertBefore(bh, s);
		  })(document, 'script');
		</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="container page-wrap">
		<!-- <div class="content-wrap" style="margin:0 15px 15px 15px; border:1px solid #c9c0b9;"> -->
	<header>


			<div class="row"><!-- columns-12 -->
				<div class="logo">
					<!-- <h1 class="site-title"> -->
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php bloginfo('template_directory'); ?>/img/BenedumFoundationLogo_rgb.jpg" alt="Benedum Foundation Logo, Click here to return to the homepage">
						</a>
					<!-- </h1> -->
				</div>
				<div class="gateway">
					<div class="site-search row">
						<div class="search-container">
							<?php get_template_part('partials/searchform')?>
						</div>
					</div>
					<nav class="main-navigation">
						<div class="sidr-trigger hide">MENU &#9776;</div>
						<?php if(has_nav_menu('main_nav')){
									$defaults = array(
										'theme_location'  => 'main_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => 'primary_nav',
										'menu_class'      => 'menu',
										'menu_id'         => 'primarynav',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
								}else{
									echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
								} ?>
					</nav>
			</div>

		<!-- </div> -->
	</header>
