<?php
if(isset($_POST["formlogin"])) {
    extract($_POST);

    if(!empty($lemail) && !empty($lpassword)) {
        $q = $db->prepare("SELECT * FROM users WHERE email = :email");
        $q->execute(["email" => $lemail]);
        $result = $q->fetch();

        if($result == true) {
            //le compte existe
            $hashpassword = $result["password"];
            if(password_verify($lpassword, $result["password"])) {
                echo "Connexion en cours";

  header('Location: http://127.0.0.1:5173/');
  exit();


            } else {
                echo "Le mot de passe n'est pas correct";
            }

        }else {
            echo "Le compte comportant l'email " . $lemail . " n'existe pas";
        }

    } else {
        echo "Veuillez compléter l'ensemble des champs";
    }
}
?>