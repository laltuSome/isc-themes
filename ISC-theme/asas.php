function secure_authentication_login_form() {
 ?>
 <script src="https://www.google.com/recaptcha/api.js"></script>
 <div class="g-recaptcha" data-sitekey="SITE_KEY"></div>
 <?php
}
add_action( 'login_form', 'secure_authentication_login_form' );
add_action( 'login_form_middle', 'secure_authentication_login_form' );
function secure_authentication_login_verify( $user, $username ) {
 $secret_key = 'SECRET_KEY';
 if ( isset( $_POST['g-recaptcha-response'] ) ) {
 $recaptcha_response = $_POST['g-recaptcha-response'];
 $url = 'https://www.google.com/recaptcha/api/siteverify';
 $data = array(
 'secret' => $secret_key,
 'response' => $recaptcha_response,
 );
 $options = array(
 'http' => array(
 'header' => "Content-type: application/x-www-form-urlencoded\r\n",
 'method' => 'POST',
 'content' => http_build_query( $data ),
 ),
 );
 $context = stream_context_create( $options );
 $result = file_get_contents( $url, false, $context );
 $result = json_decode( $result );
 if ( ! $result->success ) {
 // If the reCAPTCHA response is invalid, return an error
 $error = new WP_Error();
 $error->add( 'recaptcha_error', __( '<strong>ERROR</strong>: Invalid reCAPTCHA response.' )
);
 return $error;
 }
 } else {
 // If the reCAPTCHA field is not present, return an error
 $error = new WP_Error();
 $error->add( 'recaptcha_error', __( '<strong>ERROR</strong>: reCAPTCHA is required.' ) );
 return $error;
 }
 return $user;
}
add_filter( 'wp_authenticate_user', 'secure_authentication_login_verify', 10, 2 );