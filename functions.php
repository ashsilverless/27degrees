<?php
/**
 * Silverless functions and definitions
 *
 * @package Silverless
 */

/** = Ditch Junk = */ 

remove_action('wp_head', 'print_emoji_detection_script', 7);

remove_action('wp_print_styles', 'print_emoji_styles');

/** = Enqueue scripts and styles = */ 

function silverless_scripts() {
	
	wp_enqueue_style( 'silverless-style', get_stylesheet_uri() );

	wp_enqueue_script( 'silverless-core-js', get_template_directory_uri() . '/inc/js/compiled.js', array('jquery'), true); 
	
}

add_action( 'wp_enqueue_scripts', 'silverless_scripts' );

/**= Add Menus =**/

function sl_custom_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'about-menu' => __( 'Advice Menu' )
    )
  );
}
add_action( 'init', 'sl_custom_menu' );

/* Dashboard Config */

add_action('wp_dashboard_setup', 'sl_dashboard_widget');
  
function sl_dashboard_widget() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Silverless Support', 'custom_dashboard_help');
}
function custom_dashboard_help() {
?>

<img src="https://silverless.co.uk/wp-content/themes/silverless/images/logo__silverless.svg" style="max-width:100%;
height:auto;"/>

<img src="https://silverless.co.uk/wp-content/uploads/2016/10/icon-screen-delete.svg" style=" display: inline-block; width: 60px; margin: 2em calc(50% - 30px) 1em;"/>

<p>For support or general enquiries please contact us directly at <a href="mailto:hello@silverless.co.uk">hello@silverless.co.uk</a> or call <a href="tel:+44 (0)1672 556532">01672 556532</a></p>
<p>We aim to respond within 60 minutes during hours (Mon to Fri 9am - 5pm)</p>

<?php
}

/* Dashboard Style */

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '
<style>
#menu-posts-camp .dashicons-admin-post:before{font-family:dashicons;content:"\f102"}#toplevel_page_testimonials .dashicons-admin-generic:before{font-family:dashicons;content:"\f101"}#toplevel_page_call-to-action .dashicons-admin-generic:before{font-family:dashicons;content:"\f488"}.taxonomy-where tr.form-field.term-description-wrap,body.taxonomy-what .form-field.term-description-wrap,body.taxonomy-when .form-field.term-description-wrap,body.taxonomy-where .form-field.term-description-wrap{display:none}#wpcontent,#wpfooter,#wpwrap{background:#cdc7c0}#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap,#wpadminbar{background-color:#362b3a}#adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,#adminmenu .wp-has-current-submenu.opensub .wp-submenu,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu,.no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#302036}#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu .wp-menu-arrow,#adminmenu .wp-menu-arrow div,#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,.folded #adminmenu li.wp-has-current-submenu{background:#312036;color:#e57732}ul#adminmenu a.wp-has-current-submenu:after,ul#adminmenu>li.current>a.current:after{border-right-color:#cdc7c0}#adminmenu .wp-submenu a:focus,#adminmenu .wp-submenu a:hover,#adminmenu a:hover,#adminmenu li.menu-top>a:focus{color:#e4652f}

.post-type-page .acf-postbox {
  background: hsl(283, 14%, 20%);
  border-color: hsl(283, 14%, 20%);
}

.post-type-page #poststuff h2 {
  font-size: 14px;
  color: hsl(32, 12%, 78%);
  border:none;
  }

.post-type-page .acf-fields>.acf-field {
  border-color: hsl(30, 9%, 71%) !important;
}

.post-type-page .acf-flexible-content .layout {
  background: hsl(32, 12%, 78%);
  border: none;
  margin-bottom:50px;
}

.post-type-page .acf-flexible-content .layout .acf-fc-layout-handle {
    font-size:18px;
    text-transform:uppercase;
    font-weight:900;}

.post-type-page .acf-flexible-content .layout .acf-fc-layout-order {
  background: hsl(15, 73%, 46%);
  font-size: 12px;
  color: hsl(0, 0%, 100%);
}

.post-type-page .acf-flexible-content .no-value-message {
  color: hsl(0, 0%, 100%);
}

.post-type-page .inside.acf-fields > .acf-field > .acf-label {
    color: hsl(0, 0%, 100%);
    text-transform: uppercase;
    font-size: 24px;
    }

</style>';
}

/**
 * ACF Options Pages.
 */
 
 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'site-general-settings',
	));*/

	acf_add_options_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'menu_slug' 	=> 'testimonials',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Call To Action',
		'menu_title'	=> 'Call To Action',
		'menu_slug' 	=> 'call-to-action',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
}
 
/**= Remove Default Menu Items =**/
 
function remove_menus(){

  remove_menu_page( 'edit-comments.php' );          //Comments
  
}
add_action( 'admin_menu', 'remove_menus' );

/**= Allow SVG Upload =**/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**= Set WooCommerce Theme Support =**/

add_action( 'after_setup_theme', function() {
	add_theme_support( 'woocommerce' );
} );

/**= WooCommerce - Custom Quantity Fields =**/

add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**= WooCommerce - Custom Customer Message in Checkout =**/

function md_custom_woocommerce_checkout_fields( $fields ) 
{
    $fields['order']['order_comments']['placeholder'] = 'Pop any info you need us to know in here, please';

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'md_custom_woocommerce_checkout_fields' );

/**= Social Sharing Buttons =**/

function silverless_social_sharing_buttons($content) {
	global $post;
	if(is_singular() || is_home()){
	
		// Get current page URL 
		$silverlessURL = urlencode(get_permalink());
 
		// Get current page title
		$silverlessTitle = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
		// $silverlessTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$silverlessThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$silverlessTitle.'&amp;url='.$silverlessURL.'&amp;via=Crunchify';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$silverlessURL;
 
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$silverlessURL.'&amp;media='.$silverlessThumbnail[0].'&amp;description='.$silverlessTitle;
 
		// Add sharing button at the end of page/page content
		$content .= '<!-- Implement your own superfast social sharing buttons without any JavaScript loading. No plugin required. Detailed steps here: http://crunchify.me/1VIxAsz -->';
		$content .= '<div class="contactSocials"><h5 class="heading heading__sm">SHARE </h5>';
		$content .= ' <a href="'. $twitterURL .'" target="_blank"><i class="fab fa-twitter"></i></a>';
		$content .= '<a href="'.$facebookURL.'" target="_blank"><i class="fab fa-facebook-square"></i></a>';
		$content .= '</div>';
		
		return $content;
	}else{
		// if not a post/page then don't include sharing button
		return $content;
	}
};
//add_filter( 'the_content', 'silverless_social_sharing_buttons');

/**= Load Menu =

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_items($items,$args) {
	
	$menu = wp_get_nav_menu_object($args->menu);
	
	if($args->theme_location=='main-menu') {
		$logo     = get_field('logo', 'option');
		$title    = get_field('title_company', $menu);
		$subtitle = get_field('subtitle_company', $menu);
		
		$html_logo = '<li class="menu-item-logo pb5"><a href="'.home_url().'"><img src="'.$logo['url'].'" alt="'.$logo['alt'].'" /></a></li>';
		
		$social_icons = '<li class="menu-item-social-items pt5">';

		
		if(have_rows('social_links', 'option')) {
			while(have_rows('social_links', 'option')) {
				the_row();
				$row = get_row();
				
				$social_icon = "<a href='".get_sub_field('page_link')."'><i class='fab fa-".get_sub_field('name')."'></i></a>";
				
				$social_icons .= $social_icon;
			}
		}
		$social_icons .= "</li>";
		
		$items = $html_logo . $items . $social_icons;
	}
	
	return $items;
}
**/

/**
* Nav Menu Field v5
*
* @package ACF Nav Menu Field
*/
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * ACF_Field_Nav_Menu_V5 Class
 *
 * This class contains all the custom workings for the Nav Menu Field for ACF v5
 */
class ACF_Field_Nav_Menu_V5 extends acf_field {
	/**
	 * Sets up some default values and delegats work to the parent constructor.
	 */
	public function __construct() {
		$this->name     = 'nav_menu';
		$this->label    = __( 'Nav Menu' );
		$this->category = 'relational';
		$this->defaults = array(
			'save_format' => 'id',
			'allow_null'  => 0,
			'container'   => 'div',
		);
		parent::__construct();
	}
	/**
	 * Renders the Nav Menu Field options seen when editing a Nav Menu Field.
	 *
	 * @param array $field The array representation of the current Nav Menu Field.
	 */
	public function render_field_settings( $field ) {
		// Register the Return Value format setting
		acf_render_field_setting( $field, array(
			'label'        => __( 'Return Value' ),
			'instructions' => __( 'Specify the returned value on front end' ),
			'type'         => 'radio',
			'name'         => 'save_format',
			'layout'       => 'horizontal',
			'choices'      => array(
				'object' => __( 'Nav Menu Object' ),
				'menu'   => __( 'Nav Menu HTML' ),
				'id'     => __( 'Nav Menu ID' ),
			),
		) );
		// Register the Menu Container setting
		acf_render_field_setting( $field, array(
			'label'        => __( 'Menu Container' ),
			'instructions' => __( "What to wrap the Menu's ul with (when returning HTML only)" ),
			'type'         => 'select',
			'name'         => 'container',
			'choices'      => $this->get_allowed_nav_container_tags(),
		) );
		// Register the Allow Null setting
		acf_render_field_setting( $field, array(
			'label'        => __( 'Allow Null?' ),
			'type'         => 'radio',
			'name'         => 'allow_null',
			'layout'       => 'horizontal',
			'choices'      => array(
				1 => __( 'Yes' ),
				0 => __( 'No' ),
			),
		) );
	}
	/**
	 * Get the allowed wrapper tags for use with wp_nav_menu().
	 *
	 * @return array An array of allowed wrapper tags.
	 */
	private function get_allowed_nav_container_tags() {
		$tags           = apply_filters( 'wp_nav_menu_container_allowedtags', array( 'div', 'nav' ) );
		$formatted_tags = array(
			'0' => 'None',
		);
		foreach ( $tags as $tag ) {
			$formatted_tags[$tag] = ucfirst( $tag );
		}
		return $formatted_tags;
	}
	/**
	 * Renders the Nav Menu Field.
	 *
	 * @param array $field The array representation of the current Nav Menu Field.
	 */
	public function render_field( $field ) {
		$allow_null = $field['allow_null'];
		$nav_menus  = $this->get_nav_menus( $allow_null );
		if ( empty( $nav_menus ) ) {
			return;
		}
		?>
		<select id="<?php esc_attr( $field['id'] ); ?>" class="<?php echo esc_attr( $field['class'] ); ?>" name="<?php echo esc_attr( $field['name'] ); ?>">
		<?php foreach( $nav_menus as $nav_menu_id => $nav_menu_name ) : ?>
			<option value="<?php echo esc_attr( $nav_menu_id ); ?>" <?php selected( $field['value'], $nav_menu_id ); ?>>
				<?php echo esc_html( $nav_menu_name ); ?>
			</option>
		<?php endforeach; ?>
		</select>
		<?php
	}
	/**
	 * Gets a list of Nav Menus indexed by their Nav Menu IDs.
	 *
	 * @param bool $allow_null If true, prepends the null option.
	 *
	 * @return array An array of Nav Menus indexed by their Nav Menu IDs.
	 */
	private function get_nav_menus( $allow_null = false ) {
		$navs = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
		$nav_menus = array();
		if ( $allow_null ) {
			$nav_menus[''] = ' - Select - ';
		}
		foreach ( $navs as $nav ) {
			$nav_menus[ $nav->term_id ] = $nav->name;
		}
		return $nav_menus;
	}
	/**
	 * Renders the Nav Menu Field.
	 *
	 * @param int   $value   The Nav Menu ID selected for this Nav Menu Field.
	 * @param int   $post_id The Post ID this $value is associated with.
	 * @param array $field   The array representation of the current Nav Menu Field.
	 *
	 * @return mixed The Nav Menu ID, or the Nav Menu HTML, or the Nav Menu Object, or false.
	 */
	public function format_value( $value, $post_id, $field ) {
		// bail early if no value
		if ( empty( $value ) ) {
			return false;
		}
		// check format
		if ( 'object' == $field['save_format'] ) {
			$wp_menu_object = wp_get_nav_menu_object( $value );
			if( empty( $wp_menu_object ) ) {
				return false;
			}
			$menu_object = new stdClass;
			$menu_object->ID    = $wp_menu_object->term_id;
			$menu_object->name  = $wp_menu_object->name;
			$menu_object->slug  = $wp_menu_object->slug;
			$menu_object->count = $wp_menu_object->count;
			return $menu_object;
		} elseif ( 'menu' == $field['save_format'] ) {
			ob_start();
			wp_nav_menu( array(
				'menu' => $value,
				'container' => $field['container']
			) );
			return ob_get_clean();
		}
		// Just return the Nav Menu ID
		return $value;
	}
}
new ACF_Field_Nav_Menu_V5();




