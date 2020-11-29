<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme   = wp_get_theme( 'OceanWP' );
    $version = $theme->get( 'Version' );
    // Load the stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function contact_form() {
    if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['message'])) {
        $nom = esc_attr($_POST['nom']);
        $mail = $_POST['mail'];
        $msg = esc_textarea($_POST['message']);
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Chalets Caviar <info@chaletscaviar.fr>' . "\r\n" .
            'Reply-To:" info@chaletscaviar.fr \r\n"' .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
            'Content-Disposition: inline'. "\r\n" .
            'Content-Transfer-Encoding: 7bit'." \r\n" .
            'X-Mailer:PHP/'.phpversion();
        $email_to = "kylianzh@gmail.com";
        $email_subject = "Location / Vente de chalet";
        $email_message = "".$nom." vous a envoyé le message suivant: ".$msg." \n Si vous souhaitez lui répondre, voici son email: ".$mail."\n";
        mail($email_to, $email_subject, $email_message, $headers);
    }
}
add_action( 'contact_form_submit', 'contact_form' );