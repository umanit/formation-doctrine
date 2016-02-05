<?php

require_once '../bootstrap.php';

use Entity\Comment;

if (isset($_GET['id'])) {
    $post = $entityManager->getRepository('Entity\Post')->find($_GET['id']);
}

if (isset($_POST['submit'])) {
    $comment = new Comment();
    $comment->setMessage($_POST['message']);

    $entityManager->persist($comment);
    $entityManager->flush($comment);
}

$comments = $entityManager->getRepository('Entity\Comment')->findBy(array(), array('date' => 'ASC'));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les commentaires</title>
    </head>
    <body>
        <h1><?= $post->getSubject(); ?></h1>
        <p>
            <?= $post->getMessage(); ?>
        </p>

        <form method="post" action="comment.php?id=<?= $post->getId() ?>">
            <label>
                Message
                <input type="text" name="message"/>
            </label>

            <input type="submit" name="submit" value="Envoyer"/>
        </form>
        <h2>Commentaires</h2>
        <?php foreach ($comments as $comment): ?>
            <?= $comment->getMessage(); ?><br/>
        <?php endforeach; ?>
    </body>
</html>
