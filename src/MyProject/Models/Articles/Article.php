<?php

namespace MyProject\Models\Articles;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

class Article extends ActiveRecordEntity
{
    protected $name;
    protected $text;
    protected $authorId;
    protected $createdAt;

    public function getName(): string
    {
        return $this->name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }

    public function getAuthorId(): string
    {
        return $this->authorId;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setText($text)
    {
        return $this->text = $text;
    }

    public function setAuthor(User $author): void
    {
        $this->authorId = $author->getId();
    }

    public function setAuthorId($authorId): void
    {
        $this->authorId = $authorId;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}
