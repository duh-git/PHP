<?php

namespace MyProject\Models\Comments;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

class Comment extends ActiveRecordEntity
{
    protected $text;
    protected $authorId;
    protected $createdAt;
    protected $articleId;

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    public function getDate(): string
    {
      return $this->createdAt;
    }
    
    public function getArticle(): string
    {
      return $this->articleId;
    }

    protected static function getTableName(): string
    {
        return 'comments';
    }
}
