<?php

session_start();
require_once '../bootstrap.php';

if (isset($_POST['submit'])) {
    $user = $entityManager->getRepository('Entity\User')->findOneBy(array(
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ));

    if (!is_null($user)) {
        // si utilisateur trouvé
        $_SESSION['user'] = $user;
    } else {
        die('Non trouvé');
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="login.php">
            <label>
                Email
                <input type="email" name="email"/>
            </label>
            <label>
                Password
                <input type="password" name="password"/>
            </label>

            <input type="submit" name="submit" value="Connexion"/>
        </form>
    </body>
</html>
