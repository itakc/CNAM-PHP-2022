<?php
/*
Vérifiez que tous les champs ont bien été remplis : les champs doivent être non vides.
S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.
Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquer s'il n'est pas pertinent :
- s'il y a des erreurs, il doit être masqué
- si l'utilisateur n'a envoyé aucune donné, il doit être masqué
*/

if ($_POST) {

   if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["pass"])) {
      $nom = ($_POST["nom"]);
      $email = ($_POST["email"]);
      $pass = ($_POST["pass"]);
      
  }
  // Créer les champs nom email mot de passe

  if (empty($_POST["nom"] || $_POST["email"] || $_POST["pass"])) {
   // le champ email est vide
   $error["nom"] = 'Vous devez renseigner ce champ';
   $error["email"] = 'Vous devez renseigner ce champ';
   $error["pass"] = 'Vous devez renseigner ce champ';
   }
   // Condition erreurs champs nom email mot de passe non rempli

   if (!empty($_POST["nom"] && $_POST["email"] && $_POST["pass"])) {
    $message='<div class="message"><b>CONFIRMATION INSCRIPTION</b><br />';

}  
   
   } 
         
      
?>
<!DOCTYPE html>
<html>
   </head>
   <body>
      <form name="fo" method="post" action="">
      </fieldset> 
            <H2>Nouvel utilisateur</H2>
         <!-- afficher message de confirmation  -->
            <div class="confirmation">
        <?php if (!empty($nom)&&!empty($email)&&!empty($pass)): ?>
            <?= $message ?>
            <?php endif ?>
        </div>
    <form action="" method="post">
        <div>
            <!-- afficher message d'erreur  -->
            <div class="error">
                <?php if (isset($errors['nom'])): ?>
                    <?= $errors['nom'] ?>
                <?php endif ?>
            </div>
            <input type="text" name="nom" placeholder="votre nom d'utilisateur" value="<?= htmlentities($_POST['nom'] ?? '') ?>">
        </div>
        <div>
            <div class="error">
                <?php if (isset($errors['email'])): ?>
                    <?= $errors['email'] ?>
                <?php endif ?>
            </div>
            <input type="email" name="email" placeholder="votre mail" value="<?= htmlentities($_POST['email'] ?? '') ?>">
        </div>
        <div>
            <div class="error">
                <?php if (isset($errors['pass'])): ?>
                    <?= $errors['pass'] ?>
                <?php endif ?>
            </div>
            <input type="password" name="pass" placeholder="votre mot de passe" value="<?= htmlentities($_POST['pass'] ?? '') ?>">
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>