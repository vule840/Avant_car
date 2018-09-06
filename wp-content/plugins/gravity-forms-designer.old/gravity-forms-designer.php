<?php
/*
 Plugin Name:   Gravity Forms Designer
 Plugin URI:	http://wordpressgurus.net
 Description:   Easily style your gravity forms with live preview.
 Version:		1.0
 Author:		Wordpress Gurus
 Author URI: 	http://wordpressgurus.net
 License:		1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WPG_STORE_URL', 'http://wordpressgurus.net' );
define( 'WPG_ITEM_NAME', 'Gravity Forms Designer' );
define( 'WPG_LICENSE_PAGE', 'gravity_designer_license_page' );


if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {
	include( dirname( __FILE__ ) . '/inc/EDD_SL_Plugin_Updater.php' );
}

class gravity_designer{
	function __construct(){
		
		include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
		include_once( dirname( __FILE__ ) . '/inc/forms/form1.php' );
		include_once( dirname( __FILE__ ) . '/inc/forms/form2.php' );
		include_once( dirname( __FILE__ ) . '/inc/forms/form3.php' );
		include_once( dirname( __FILE__ ) . '/inc/forms/form4.php' );
		include_once( dirname( __FILE__ ) . '/inc/forms/form5.php' );
		
	}
}
function wpg_gravity_designer_plugin_updater() {

	$license_key = trim( get_option( 'wpg_designer_license_key' ) );

	$edd_updater = new EDD_SL_Plugin_Updater( WPG_STORE_URL, __FILE__, array(
			'version'   => '1.0',                
			'license'   => $license_key,   
			'item_name' => WPG_ITEM_NAME, 
			'author'    => 'Wordpress Gurus'
		)
	);

}
add_action( 'admin_init', 'wpg_gravity_designer_plugin_updater', 0 );


function wpg_loading_scripts()
{
    wp_register_script( 'wpg-select-js', plugins_url( '/inc/js/selectize.js', __FILE__ ), array( 'jquery' ) );
    wp_register_script( 'wpg-check', plugins_url( '/inc/js/icheck.js', __FILE__ ), array( 'jquery' ) );
    wp_register_style( 'wpg-select-css', plugins_url( '/inc/css/selectize.css', __FILE__ ), array(), '20120208', 'all' );
    wp_register_style( 'wpg-style-css', plugins_url( '/inc/css/style.css', __FILE__ ), array(), '20120208', 'all' );
    wp_enqueue_script( 'wpg-select-js' );
    wp_enqueue_script( 'wpg-check' );
	wp_enqueue_style( 'wpg-select-css' );
	wp_enqueue_style( 'wpg-style-css' );
}
add_action( 'wp_enqueue_scripts', 'wpg_loading_scripts' );

function gfd_icheck(){ ?>

		  <script>
  jQuery(document).bind('gform_post_render', function(event,form_id) {
  
    jQuery('input').iCheck({
       checkboxClass: 'icheckbox_square',
       radioClass: 'iradio_square',
       inheritClass: true,
       cursor: true,
       labelHover: true
              
     });
     jQuery('input').on('ifToggled', function(event){
         var attr = jQuery(this).attr('onClick');
         if (typeof attr !== 'undefined' && attr !== false) {
             if(attr.substr(0,14) === "gf_apply_rules") {
                 jQuery.globalEval( jQuery(this).attr('onClick') );           
             }
         }
     });
  });    
  
</script>

<?php } 

add_action('wp_footer', 'gfd_icheck');

function gfd_select(){ ?>

		  <script>
  jQuery(document).bind('gform_post_render', function(event,form_id) {
  
    jQuery('.gfield_select').selectize({
        sortField: 'text',
        plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
    });
  });    
</script>

<?php } 

add_action('wp_footer', 'gfd_select');



function wpg_designer_license_menu() {
	add_plugins_page( 'Gravity Designer', 'Gravity Designer', 'manage_options', WPG_LICENSE_PAGE, 'gravity_designer_license_page' );
}
add_action('admin_menu', 'wpg_designer_license_menu');

function gravity_designer_license_page() {
	$license = get_option( 'wpg_designer_license_key' );
	$status  = get_option( 'wpg_designer_license_status' );
	?>
	<div class="wrap">
		<h2><?php _e('Gravity Forms Designer License'); ?></h2>
		<form method="post" action="options.php">

			<?php settings_fields('wpg_designer_license'); ?>

			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row" valign="top">
							<?php _e('License Key'); ?>
						</th>
						<td>
							<input id="wpg_designer_license_key" name="wpg_designer_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" />
							<label class="description" for="wpg_designer_license_key"><?php _e('Enter your license key'); ?></label>
						</td>
					</tr>
					<?php if( false !== $license ) { ?>
						<tr valign="top">
							<th scope="row" valign="top">
								<?php _e('Activate License'); ?>
							</th>
							<td>
								<?php if( $status !== false && $status == 'valid' ) { ?>
									<span style="color:green;"><?php _e('active'); ?></span>
									<?php wp_nonce_field( 'wpg_designer_nonce', 'wpg_designer_nonce' ); ?>
									<input type="submit" class="button-secondary" name="wpg_license_deactivate" value="<?php _e('Deactivate License'); ?>"/>
								<?php } else {
									wp_nonce_field( 'wpg_designer_nonce', 'wpg_designer_nonce' ); ?>
									<input type="submit" class="button-secondary" name="wpg_license_activate" value="<?php _e('Activate License'); ?>"/>
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php submit_button(); ?>

		</form>
	<?php
}

function wpg_designer_register_option() {
	register_setting('wpg_designer_license', 'wpg_designer_license_key', 'wpg_sanitize_license' );
}
add_action('admin_init', 'wpg_designer_register_option');

function wpg_sanitize_license( $new ) {
	$old = get_option( 'wpg_designer_license_key' );
	if( $old && $old != $new ) {
		delete_option( 'wpg_designer_license_status' ); 
	}
	return $new;
}


function wpg_designer_activate_license() {

	if( isset( $_POST['wpg_license_activate'] ) ) {

	 	if( ! check_admin_referer( 'wpg_designer_nonce', 'wpg_designer_nonce' ) )
			return; 

		$license = trim( get_option( 'wpg_designer_license_key' ) );

		$api_params = array(
			'edd_action' => 'activate_license',
			'license'    => $license,
			'item_name'  => urlencode( WPG_ITEM_NAME ), 
			'url'        => home_url()
		);

		$response = wp_remote_post( WPG_STORE_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

			if ( is_wp_error( $response ) ) {
				$message = $response->get_error_message();
			} else {
				$message = __( 'An error occurred, please try again.' );
			}

		} else {

			$license_data = json_decode( wp_remote_retrieve_body( $response ) );

			if ( false === $license_data->success ) {

				switch( $license_data->error ) {

					case 'expired' :

						$message = sprintf(
							__( 'Your license key expired on %s.' ),
							date_i18n( get_option( 'date_format' ), strtotime( $license_data->expires, current_time( 'timestamp' ) ) )
						);
						break;

					case 'revoked' :

						$message = __( 'Your license key has been disabled.' );
						break;

					case 'missing' :

						$message = __( 'Invalid license.' );
						break;

					case 'invalid' :
					case 'site_inactive' :

						$message = __( 'Your license is not active for this URL.' );
						break;

					case 'item_name_mismatch' :

						$message = sprintf( __( 'This appears to be an invalid license key for %s.' ), WPG__ITEM_NAME );
						break;

					case 'no_activations_left':

						$message = __( 'Your license key has reached its activation limit.' );
						break;

					default :

						$message = __( 'An error occurred, please try again.' );
						break;
				}

			}

		}

		if ( ! empty( $message ) ) {
			$base_url = admin_url( 'plugins.php?page=' . WPG_LICENSE_PAGE );
			$redirect = add_query_arg( array( 'sl_activation' => 'false', 'message' => urlencode( $message ) ), $base_url );

			wp_redirect( $redirect );
			exit();
		}

		update_option( 'wpg_designer_license_status', $license_data->license );
		wp_redirect( admin_url( 'plugins.php?page=' . WPG_LICENSE_PAGE ) );
		exit();
	}
}
add_action('admin_init', 'wpg_designer_activate_license');


function wpg_designer_deactivate_license() {

	if( isset( $_POST['wpg_license_deactivate'] ) ) {

	 	if( ! check_admin_referer( 'wpg_designer_nonce', 'wpg_designer_nonce' ) )
			return; 

		$license = trim( get_option( 'wpg_designer_license_key' ) );

		$api_params = array(
			'edd_action' => 'deactivate_license',
			'license'    => $license,
			'item_name'  => urlencode( WPG_ITEM_NAME ),
			'url'        => home_url()
		);

		$response = wp_remote_post( WPG_STORE_URL, array( 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ) );

		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

			if ( is_wp_error( $response ) ) {
				$message = $response->get_error_message();
			} else {
				$message = __( 'An error occurred, please try again.' );
			}

			$base_url = admin_url( 'plugins.php?page=' . WPG_LICENSE_PAGE );
			$redirect = add_query_arg( array( 'sl_activation' => 'false', 'message' => urlencode( $message ) ), $base_url );

			wp_redirect( $redirect );
			exit();
		}

		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		if( $license_data->license == 'deactivated' ) {
			delete_option( 'wpg_designer_license_status' );
		}

		wp_redirect( admin_url( 'plugins.php?page=' . WPG_LICENSE_PAGE ) );
		exit();

	}
}
add_action('admin_init', 'wpg_designer_deactivate_license');



function wpg_designer_admin_notices() {
	if ( isset( $_GET['sl_activation'] ) && ! empty( $_GET['message'] ) ) {

		switch( $_GET['sl_activation'] ) {

			case 'false':
				$message = urldecode( $_GET['message'] );
				?>
				<div class="error">
					<p><?php echo $message; ?></p>
				</div>
				<?php
				break;

			case 'true':
			default:
				break;

		}
	}
}
add_action( 'admin_notices', 'wpg_designer_admin_notices' );



$gravity_design	=	new gravity_designer();

