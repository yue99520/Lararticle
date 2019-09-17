<?php


namespace yue99520\Lararticle\Contracts\Entity;


use Illuminate\Support\Carbon;

interface BasicProperty
{
    public function getCreatedAt(): Carbon;

    public function getUpdatedAt(): Carbon;
}
