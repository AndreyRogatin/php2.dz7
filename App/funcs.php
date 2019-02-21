<?php

use App\Models\Article;

return [
    'getId' => function (Article $model) {
        return $model->id;
    },
    'getTitle' => function (Article $model) {
        return '<a href="/Admin/Article/action?id=' . $model->id . '">' . $model->title . '</a>';
    },
    'getAuthor' => function (Article $model) {
        return $model->author->name ?? '';
    }
];