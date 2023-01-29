<?php

if(isset($_POST["formsend"])) {

extract($_POST);

if(!empty($password) && !empty($cpassword) && !empty($email)){

  if($password == $cpassword) {
     $options = [
         "cost" => 8,
     ];

     $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);


        $q = $db->prepare("INSERT INTO users(email,password) VALUES(:email,:password)");
            $q->execute([
                "email" => $email,
                "password" => $hashpass
            ]);
            header('Location: http://gizo.fr/');
            exit();

  }

}else {
    echo "Certains champs n'ont pas été remplis";
}

}
?>