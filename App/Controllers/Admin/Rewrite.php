<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

/**
 * Class Rewrite
 * @package App\Controllers\Admin
 */
class Rewrite extends Controller
{
    /**
     * @return void
     * @throws \App\Exceptions\DbException
     */
    protected function handle()
    {
        if (isset($_POST['id'], $_POST['title'], $_POST['content'])) {
            $article = Article::findById($_POST['id']);
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
        }
        static::redirect('/admin');
    }
}
