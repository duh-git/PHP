<? $title = 'Редактирование статьи' ?>
<?php include __DIR__ . '/../header.php'; ?>
<style>
    form {
        display: flex;
        flex-direction: column;
        padding: 20px;
        gap: 10px;
    }

    label {
        font-size: 25px;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    textarea {
        width: 300px;
    }
</style>
<form action="/" method="post">
    <label for="name">
        Название статьи
        <input type="text" name="name" value="<?= $article->getName() ?>">
    </label>
    <label for="text">
        Содержимое
        <textarea name="text" id="text"><?= $article->getText() ?></textarea>
    </label>
    <input type="submit" value="Сохранить" accesskey="S">
</form>
<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
<?php include __DIR__ . '/../footer.php'; ?>


