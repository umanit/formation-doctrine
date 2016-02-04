<?php

require_once '../bootstrap.php';

use Entity\Comment;

if (isset($_POST['submit'])) {
    $comment = new Comment();
    $comment->setMessage($_POST['message']);

    $entityManager->persist($comment);
    $entityManager->flush($comment);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les commentaires</title>
    </head>
    <body>
        <form method="post" action="/comment.php">
            <label>
                Message
                <input type="text" name="message"/>
            </label>

            <input type="submit" name="submit" value="Envoyer"/>
        </form>
    </body>
</html>
