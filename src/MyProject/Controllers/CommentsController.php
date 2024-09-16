<?php

namespace MyProject\Controllers;

use MyProject\Models\Comments\Comment;

class CommentsController extends AbstractController
{
    public function loadComments(int $articleId)
    {
        $comments = Comment::getComments($articleId);
        $this->view->renderHtml('comments/comments.php', ['comments' => $comments]);
    }

    public function edit(int $commentId)
    {
        $comment = Comment::getById($commentId);
        $this->view->renderHtml('comments/edit.php', ['comment' => $comment]);
    }
}
