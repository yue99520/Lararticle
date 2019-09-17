<?php


namespace yue99520\Lararticle\Contracts\Like;


use yue99520\Lararticle\Contracts\Entity\BasicProperty;

interface Like extends BasicProperty
{
    public function getAuthor(): int ;
}
