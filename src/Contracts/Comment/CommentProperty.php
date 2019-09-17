<?php


namespace yue99520\Lararticle\Contracts\Comment;


use yue99520\Lararticle\Contracts\Entity\BasicProperty;

interface CommentProperty extends BasicProperty
{
    public function getContent(): string ;

    public function setContent(string $content);

    public function getAuthor(): int ;
}
