<?php $title = 'Комментарии' ?>
<?php include __DIR__ . '/../header.php'; ?>
<h1>Комментарии</h1>
<h2>Добавить комментарий</h2>
<form action="/" method="post">
    <textarea name="comment" id="comment"></textarea>
    <input type="submit" value="Добавить">
</form>
<?php foreach ($comments as $comment): ?>
    <br>
    <h3><?= $comment->getAuthor()->getNickname() ?></h3>
    <p><?= $comment->getDate() ?></p>
    <p><?= $comment->getText() ?></p>
    <a href="/comments/<?= $comment->getId() ?>/edit">Редактировать</a>
    <hr>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>