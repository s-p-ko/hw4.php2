<?php

namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

/**
 * Class Add
 * @package App\Controllers\Admin
 */
class Add extends Controller
{
    /**
     * @return void
     * @throws \App\Exceptions\DbException
     */
    function handle()
    {
        if (isset($_POST['title'], $_POST['content'])) {
            $article = new Article();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
            static::redirect('/admin');
        }
    }
}
