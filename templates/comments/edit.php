<?php

use MyProject\Models\Comments\Comment;

 $title = 'Редактировать' ?>
<?php include __DIR__ . '/../header.php'; ?>
<form action="/" method="post">
    <textarea name="comment" id="comment">
        <?= $comment->getText() ?>
    </textarea>
    <input type="submit" value="Сохранить">
</form>
<?php include __DIR__ . '/../footer.php'; ?>
