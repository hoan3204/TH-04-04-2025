<?php
/**
 * Theme Info Configurations - Cream Magazine.
 *
 * @since 1.0.0
 *
 * @package Themebeez_Toolkit
 */

if ( ! function_exists( 'themebeez_toolkit_cream_magazine_config' ) ) {
	/**
	 * Configuration of theme page - Cream Magazine.
	 *
	 * @since 1.0.0
	 */
	function themebeez_toolkit_cream_magazine_config() {

		$pro_url = 'https://themebeez.com/themes/cream-magazine-pro/';

		$config = array(
			'sale_plan'       => 'Free',
			'menu_name'       => esc_html__( 'Cream Magazine Info', 'themebeez-toolkit' ),
			'page_name'       => esc_html__( 'Cream Magazine Info', 'themebeez-toolkit' ),
			'pro_version'     => array(
				'name' => 'Cream Magazine Pro',
				'url'  => $pro_url,
			),
			'changelog_url'   => '',
			'theme_url'       => 'https://themebeez.com',
			'quick_links'     => array(
				'pro_url'             => array(
					'title'      => esc_html__( 'Upgrade to Pro', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Get advance customization and premium support from our team of WordPress experts via email.', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-superhero',
					'link_title' => esc_html__( 'Get it today', 'themebeez-toolkit' ),
					'link_url'   => $pro_url,
					'link_class' => 'button tt-button button-primary',
				),
				'documentation_url'   => array(
					'title'      => esc_html__( 'Documentation', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Stuck due to an issue? Our detailed documentation will surely clear up any confusions you have!', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-media-document',
					'link_title' => esc_html__( 'Read Now', 'themebeez-toolkit' ),
					'link_url'   => 'https://themebeez.com/docs/cream-magazine-theme-documentation/',
					'link_class' => 'button tt-button button-secondary',
				),
				'theme_support_url'   => array(
					'title'      => esc_html__( 'Support', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Get in touch with our support team. You can always submit a support ticket for help.', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-megaphone',
					'link_title' => esc_html__( 'Create Post', 'themebeez-toolkit' ),
					'link_url'   => 'https://themebeez.com/support-forum/cream-magazine-free-theme-support/',
					'link_class' => 'button tt-button button-secondary',
				),
				'feature_request_url' => array(
					'title'      => esc_html__( 'Feature Request', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'Please take a moment to suggest any features that could enhance our product.', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-marker',
					'link_title' => esc_html__( 'Make a request', 'themebeez-toolkit' ),
					'link_url'   => 'https://github.com/themebeez/cream-magazine/issues',
					'link_class' => 'button tt-button button-secondary',
				),
				'rate_review_url'     => array(
					'title'      => esc_html__( 'Leave us a review', 'themebeez-toolkit' ),
					'desc'       => esc_html__( 'What do you think of our theme? Was it a good experience and did it match your expectations? Let us know so we can improve!', 'themebeez-toolkit' ),
					'icon'       => 'dashicons-star-empty',
					'link_title' => esc_html__( 'Submit a review', 'themebeez-toolkit' ),
					'link_url'   => 'https://wordpress.org/support/theme/cream-magazine/reviews/#new-post',
					'link_class' => 'button tt-button button-secondary',
				),
			),
			// Tabs.
			'tabs'            => array(
				'getting_started'   => esc_html__( 'Getting Started', 'themebeez-toolkit' ),
				'starter_templates' => esc_html__( 'Starter Templates', 'themebeez-toolkit' ),
				'plugins'           => esc_html__( 'Plugins', 'themebeez-toolkit' ),
				'changelog'         => esc_html__( 'Changelog', 'themebeez-toolkit' ),
			),
			// Getting started.
			'getting_started' => array(
				'free' => array(
					array(
						'title'               => esc_html__( 'Site Identity', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'News Area Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=cream_magazine_homepage_customization' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Banner/Slider Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_banner_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Ticker News Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_ticker_news_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_header_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Footer Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_footer_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Blog Page Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_blog_page_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Post Meta Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_post_meta_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Excerpt Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_post_excerpt_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Social Links', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_social_links_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Breadcrumb Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_breadcrumb_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Sidebar Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_sidebar_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Theme Color Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_theme_color_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Category Meta Color', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_category_color_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Typography Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=cream_magazine_typography_customization' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Global Customization', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=cream_magazine_global_customization' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Layout Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=cream_magazine_site_layout_options' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Image Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=header_image' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Site Background Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=background_image' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Menu Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=nav_menus' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Widget Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Homepage Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=static_front_page' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Additional CSS Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Customize', 'themebeez-toolkit' ),
						'button_link'         => esc_url( admin_url( 'customize.php?autofocus[section]=custom_css' ) ),
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
				),
				'pro'  => array(
					array(
						'title'               => esc_html__( 'Theme Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Advance Color Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Header Layouts', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Banner Layouts', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'News Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Related Posts Section', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Ajax Post Loading', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Fallback Image Option', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Social Widget', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Sidebar/Footer Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
					array(
						'title'               => esc_html__( 'Advance Typography Options', 'themebeez-toolkit' ),
						'text'                => '',
						'button_label'        => esc_html__( 'Learn More', 'themebeez-toolkit' ),
						'button_link'         => $pro_url,
						'is_button'           => false,
						'recommended_actions' => false,
						'is_new_tab'          => false,
					),
				),
			),
		);

		Themebeez_Toolkit_Theme_Info::init( $config );
	}
}

add_action( 'after_setup_theme', 'themebeez_toolkit_cream_magazine_config' );
