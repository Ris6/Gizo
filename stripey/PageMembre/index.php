<?php session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Titre</title>
    </head>
    <body>

    <h1>Bienvenue sur votre profil</h1>
<?php
if(isset($_SESSION["email"]))
{
    ?>
    <p>Votre e-mail: <?= $_SESSION["email"]; ?> </p>
    <?php
}else{
    echo "Veuillez vous connecter"; 
}
?>
    
<!-- Menu de navigation -->
<?php include "menunavigation.php"; 
include "database.php";
        global $db;
?>

<h1>Connexion</h1>
<form method="post">
<input type="lemail" name="lemail" id="lemail" placeholder="Votre e-mail " required><br/>
<input type="lpassword" name="lpassword" id="lpassword" placeholder="Votre mot de passe" required><br/>
<input type="submit" name="formlogin" id="formlogin">
</form>

<?php include "Connexion.php"; ?>

<h1>Inscription</h1>
<form method="post">
<input type="email" name="email" id="email" placeholder="Votre e-mail " required><br/>
<input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
<input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre votre mot de passe" required><br/>
<input type="submit" name="formsend" id="formsend">
</form>

   <?php include 'Inscription.php'; ?>

 


</body>
</html>