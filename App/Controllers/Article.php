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
     */
    public function handle()
    {
        $id = $this->data['prop'];
        $this->view->article = ArticleModel::findById($id);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
