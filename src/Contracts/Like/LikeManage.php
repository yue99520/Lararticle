<?php


namespace yue99520\Lararticle\Contracts\Like;


use Illuminate\Database\Eloquent\Collection;

interface LikeManage
{
    public function getCount(): int ;

    public function getLikes(): Collection ;

    public function isLike(int $userId): bool ;

    public function like(int $userId);

    public function unlike(int $userId);
}
