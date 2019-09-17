<?php


namespace yue99520\Lararticle\Contracts\Comment;

use yue99520\Lararticle\Contracts\Like\LikeManage;

interface Comment
{
    public function property(): CommentProperty;

    public function like(): LikeManage;
}
