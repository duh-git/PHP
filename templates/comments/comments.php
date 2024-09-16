<?php $title = 'Комментарии' ?>
<?php include __DIR__ . '/../header.php'; ?>
<h1>Комментарии</h1>
<h2>Добавить комментарий</h2>
<form action="../../../src/MyProject/Services/Scripts/addComment.php" method="post">
    <textarea name="text" id="comment"></textarea>
    <input type="submit" value="Добавить">
    <input type="hidden" value="<?= $comments[0]->getArticle() ?>">
    <input type="hidden" value="<?= $comments[0]->getArticle() ?>">
</form>
<?php if (sizeof($comments)) {
    foreach ($comments as $comment): ?>
        <br>
        <h3><?= $comment->getAuthor()->getNickname() ?></h3>
        <p><?= $comment->getDate() ?></p>
        <p><?= $comment->getText() ?></p>
        <a href="/comments/<?= $comment->getId() ?>/edit">Редактировать</a>
        <hr>
<?php endforeach;
} else {
    echo '<h2>Комментарии отсутствуют</h2>';
} ?>
<?php include __DIR__ . '/../footer.php'; ?>