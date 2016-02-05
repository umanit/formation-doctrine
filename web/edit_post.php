<?php
require '../bootstrap.php';

$id = $_GET['id'];
$post = $entityManager->getRepository('Entity\Post')->find($id);

if (isset($_POST['submit'])) {
    $post->setSubject($_POST['subject']);
    $post->setMessage($_POST['message']);

    $entityManager->persist($post); // Fait un update car $post est récupéré de la base via le find
    $entityManager->flush($post);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit post</title>
    </head>
    <body>
        <form method="post" action="edit_post.php?id=<?= $post->getId(); ?>">
            <label>
                Subject
                <input type="text" name="subject" value="<?= $post->getSubject(); ?>"/>
            </label>

            <label>
                Message
                <input type="text" name="message" value="<?= $post->getMessage(); ?>"/>
            </label>

            <input type="submit" name="submit" value="Modifier"/>
        </form>
    </body>
</html>
