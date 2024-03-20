<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="sticky top-0 z-50 bg-white">
	<nav class="container mx-auto flex items-center justify-between px-6">
		<div class="flex items-center">
			<?php
			if (has_custom_logo()) {
				// Get custom logo URL
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

				if (has_custom_logo()) {
					echo '<div class="bg-primary p-2 w-20 h-20 flex items-center justify-center">';
					echo '<img src="' . esc_url($logo[0]) . '" class="object-cover max-h-full max-w-full">';
					echo '</div>';
				}
			}

			?>
			
			<h1 class="text-xxl ml-4 md:block hidden"><?php echo get_bloginfo('name') ?></h1>			
		</div>
		<?php
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'container' => 'ul',
			'menu_class' => 'flex space-x-4'
		));
		?>
	</nav>
</header>