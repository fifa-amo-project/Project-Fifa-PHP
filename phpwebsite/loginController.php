<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    die('no post?');
    header('location: index.php');
    exit;
}


if ( $_POST['type'] === 'login' ) {

  $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
  $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

  $sql = "SELECT * FROM users  WHERE email = :email";
  $stmt = $db->prepare($sql);

  $stmt->bindValue(':email', $email);

  $stmt->execute();
    
  $user = $stmt->fetch(PDO::FETCH_ASSOC);



  if($user === false){

    header("refresh:5; url=https://jaibreyonlourens.nl/Project-Fifa-PHP/login.php");
    die(' Gebruikersnaam óf Wachtwoord verkeerd ingevoerd. U word na 5 seconden teruggestuurd');

  } else{

    $validPassword = password_verify($passwordAttempt, $user['password']);

    if($validPassword){
      
      $_SESSION['id'] = $user['id'];
      $_SESSION['is_Admin'] = $user['is_Admin'];
      $_SESSION['logged_in'] = time();

      header('Location: index.php');
      exit;

    } else{

        header("refresh:5; url=https://jaibreyonlourens.nl/Project-Fifa-PHP/login.php");
        die(' Gebruikersnaam óf Wachtwoord verkeerd ingevoerd. U word na 5 seconden teruggestuurd');
    }
  }
}

if ($_POST['type'] === 'register') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        exit($e->getMessage());
    }

    if (isset($_POST['submit'])) {

        try {
            $stmt = $conn->prepare('SELECT email FROM users WHERE email = ?');
            $stmt->bindParam(1, $_POST['email']);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            }
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        if ($stmt->rowCount() > 0) {
            echo "Uw email bestaat al";
        } else {
            echo "Uw email bestaat nog niet";
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is vereist";
        } else {
            $email = test_input($_POST["email"]);
        }

    }
    /*  if (isset($_POST['submit'])) {

          try {
              $stmt = $conn->prepare('SELECT username FROM users WHERE username = ?');
              $stmt->bindParam(1, $_POST['username']);
              $stmt->execute();
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

              }
          } catch (PDOException $e) {
              echo 'ERROR: ' . $e->getMessage();
          }

          if ($stmt->rowCount() > 0) {
              echo "username exists already";
          } else {
              echo "username doesn't exist yet";
          }

      }

      if (trim($_POST['password']) == '' || trim($_POST['passwordConfirm']) == '') {
          echo('All fields are required!');
      } /* else if ($_POST['password'] != $_POST['passwordConfirm']) {
          echo('Passwords do not match!');
      } else if ($_POST['password'] == $_POST['passwordConfirm']) {
          $errors = array(); */
        if (strlen($password) < 7 || strlen($password) > 16) {
            $errors[] = "Het wachtwoord moet ten minste 7 karakters en maximaal 16 karakters U word na 5 seconden teruggestuurd.";
        }
        if (!preg_match("/\d/", $password)) {
            $errors[] = "Het wachtwoord moet ten minste 1 cijfer Bevatten U word na 5 seconden teruggestuurd.";
        }
        if (!preg_match("/[A-Z]/", $password)) {
            $errors[] = "Het wachtwoord moet een hoofdletter bevatten U word na 5 seconden teruggestuurd.";
        }
        if (!preg_match("/[a-z]/", $password)) {
            $errors[] = "Het wachtwoord moet tenminste 1 kleine letter bevatten U word na 5 seconden teruggestuurd.";
        }

        if ($errors) {
            foreach ($errors as $error) {
                echo $error . "\n";
            }
            header("refresh:5; url=https://jaibreyonlourens.nl/Project-Fifa-PHP/register.php");
    
            die();
        } else {
            header('location: login.php');
        }
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));

        $sql = "INSERT INTO users (email, password) 
                     VALUES (:email, :password)";
        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':email'         => $email,
            ':password'      => $passwordHash
        ]);
   /* } */
}
exit;





