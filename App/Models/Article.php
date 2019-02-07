<?php

namespace App\Models;


class Article extends Model
{
    protected static $table = 'news';

    public $title;
    public $body;

    public static function findNLastArticles($num)
    {
        return array_reverse(array_slice(static::findAll(), -$num));
    }
}