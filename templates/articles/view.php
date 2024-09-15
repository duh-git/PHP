<?php include __DIR__ . '/../header.php'; ?>
<h1><?= $article->getName() ?></h1>
<p><?= $article->getText() ?></p>
<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
<a href="/article/<?= $article->getId() ?>/edit">Редактировать запись</a><br>
<a href="/articles/<?= $article->getId() ?>/comments">Комментарии</a>
<?php include __DIR__ . '/../footer.php'; ?>