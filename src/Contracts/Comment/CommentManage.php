<?php


namespace yue99520\Lararticle\Contracts\Comment;


use Illuminate\Database\Eloquent\Collection;
use yue99520\Lararticle\Contracts\Feature\OptionalFeature;

interface CommentManage extends OptionalFeature
{
    public function getComments(): Collection;

    public function addComment(Comment $commentUnit);

    public function removeComment(int $commentId);
}
