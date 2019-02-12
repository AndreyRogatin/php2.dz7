<?php

namespace App\Models;


class Article extends Model
{
    protected static $table = 'news';

    public $title;
    public $body;
    public $author_id;

    public function __get($key)
    {
        if ('author' === $key) {
            if (!empty($this->author_id)) {
                return Author::findById($this->author_id);
            }
        }
    }

    public static function findNLastArticles($num)
    {
        return array_reverse(array_slice(static::findAll(), -$num));
    }
}