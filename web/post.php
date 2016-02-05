<?php

require_once '../bootstrap.php';

use Entity\Post;

if (isset($_POST['submit'])) {
    $post = new Post();
    $post->setSubject($_POST['subject']);
    $post->setMessage($_POST['message']);

    $entityManager->persist($post);
    $entityManager->flush($post);
}

$posts = $entityManager->getRepository('Entity\Post')->findBy(array(), array('date' => 'DESC'));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les posts</title>
    </head>
    <body>
        <form method="post" action="/post.php">
            <label>
                Subject
                <input type="text" name="subject"/>
            </label>

            <label>
                Message
                <input type="text" name="message"/>
            </label>

            <input type="submit" name="submit" value="Envoyer"/>
        </form>

        <h2>MES SUPERS POSTS !</h2>
        <?php foreach ($posts as $post) : ?>
            <a href="comment.php?id=<?= $post->getId(); ?>"><?= $post->getSubject(); ?></a><br/>
        <?php endforeach; ?>
    </body>
</html>
