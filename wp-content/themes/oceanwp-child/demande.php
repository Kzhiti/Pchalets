<?php
	if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['message'])) {
		$nom = $_POST['nom'];
		$mail = $_POST['mail'];
		$msg = $_POST['message'];
		$email_to = "kylianzh@gmail.com";
		$email_subject = "Location / Vente de chalet";
		$email_message = "Nom ".$nom." vous a envoyé le message suivant: ".$msg." \n Si vous souhaitez lui répondre, voici son email: ".$mail."\n";
		mail($email_to, $email_subject, $email_message);
	}
?>
