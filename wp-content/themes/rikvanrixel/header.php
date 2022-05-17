<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <title><?php wp_title(); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header id="header-menu" class="container-fluid d-flex align-items-center justify-content-between">
		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>
    <nav class="navbar navbar-expand-md bg-white text-capitalize" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#rixel" aria-controls="rixel" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'rxl' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid mh-70">
            </a>
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'topnav',
				'depth'             =>  2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'rixel',
				'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
        </div>
    </nav>
</header>
<main class="container-fluid">

