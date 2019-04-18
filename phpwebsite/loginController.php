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



  } else{

    $validPassword = password_verify($passwordAttempt, $user['password']);

    if($validPassword){
      
      $_SESSION['id'] = $user['id'];
      $_SESSION['is_Admin'] = $user['is_Admin'];
      $_SESSION['logged_in'] = time();

      header('Location: index.php');
      exit;

    } else{

      die(' gebruikersnaam en wachtwoord komen niet overeen!');
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
            echo "Email exists already";
        } else {
            echo "email doesn't exist yet";
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
            $errors[] = "Password should be min 7 characters and max 16 characters";
        }
        if (!preg_match("/\d/", $password)) {
            $errors[] = "Password should contain at least one digit";
        }
        if (!preg_match("/[A-Z]/", $password)) {
            $errors[] = "Password should contain at least one Capital Letter";
        }
        if (!preg_match("/[a-z]/", $password)) {
            $errors[] = "Password should contain at least one small Letter";
        }

        if ($errors) {
            foreach ($errors as $error) {
                echo $error . "\n";
            }
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





