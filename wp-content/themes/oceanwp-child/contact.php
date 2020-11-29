<?php
/*
 * Template Name: Page Contact
 */
get_header();
?>
<form class="form_contact" method="post">
    <div><label for="nom">Votre nom:</label><br><input name="nom" type="text"></div>
    <div><label for="mail">Votre e-mail:</label><br><input name="mail" type="email"></div>
    <div><label for="message">Vos disponibilités avec le chalet souhaité:</label><br><textarea name="message"></textarea></div>
    <div class="button"><button type="submit">Envoyer la demande</button></div>
</form>
<?php
    do_action('contact_form_submit');
    get_footer(); ?>
