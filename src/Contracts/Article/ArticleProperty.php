<?php


namespace yue99520\Lararticle\Contracts\Article;


use yue99520\Lararticle\Contracts\Entity\BasicProperty;

interface ArticleProperty extends BasicProperty
{
    public function getId(): int ;

    public function getTitle(): string ;

    public function setTitle(string $title);

    public function getContent(): string ;

    public function setContent(string $content);

    public function getAuthor(): int ;

    public function setAuthor(int $author);
}
