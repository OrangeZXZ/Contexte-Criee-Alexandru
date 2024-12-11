<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>
    <section id="connexion_et_inscription" class="connexion_et_inscription">
        <h2>Inscription</h2>
		<br>
        <p>Remplissez le formulaire ci-dessous pour créer votre compte :</p>
		<br>
        
        <form method="POST" action="<?php echo site_url('welcome/traitement_inscription'); ?>">

            <label for="idCompte">Identifiant :</label><br>
            <input type="text" id="idCompte" name="idCompte" required><br>

            <label for="mdpCompte">Mot de passe :</label><br>
            <input type="password" id="mdpCompte" name="mdpCompte" required><br>

			<br>
            <button type="submit" class="btn">Valider</button>
			<button type='reset' class='btn'>Effacer</button> 

        </form>

    

        <br>
		<br>
        <form method="POST" action="<?php echo site_url('welcome/contenu/Connexion'); ?>">
            <p>Vous avez un compte ?</p>
			<br>
            <button type="submit" class="btn">Connexion</button>
        </form>
        
    </section>
</body>
