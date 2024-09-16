<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;
use MyProject\Exceptions\NotFoundException;

class ArticlesController extends AbstractController
{
    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/view.php', ['article' => $article]);
    }

    public function edit(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/edit.php', ['article' => $article]);
    }

    public function update($id)
    {
        $article = Article::getById($id);
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);
        $article->setAuthorId($_POST['authorId']);
        $article->save();
        header('Location: http://php/articles/' . $article->getId());
    }

    public function add(): void
    {
        $article = new Article();
        $author = User::getById(1);
        $article->setAuthor($author);
        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');
        $article->save();

        var_dump($article);
    }
}
