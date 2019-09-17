<?php


namespace yue99520\Lararticle\Contracts\Article;


use yue99520\Lararticle\Contracts\Comment\CommentManage;
use yue99520\Lararticle\Contracts\Like\LikeManage;

interface Article
{
    public function property(): ArticleProperty;

    public function comment(): CommentManage;

    public function like(): LikeManage;

    public function delete();

    public function save();
}
