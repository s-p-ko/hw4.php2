<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article as ArticleModel;

/**
 * Class Article
 * @package App\Controllers
 */
class Article extends Controller
{
    /**
     * @return void
     * @throws \App\Exceptions\DbException
     */
    public function handle()
    {
        $id = $this->data['data'];
        $this->view->article = ArticleModel::findById($id);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
