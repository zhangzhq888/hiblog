<?php
namespace Repositories\Blog;

use Models\Article\Article;
use Repositories\Base\EloquentRepository;

class ArticleRepository extends EloquentRepository
{
    /**
     * 获取Repo对应的数据模型
     * @return Article;
     */
    public static function getModel(){
        return Article::getInstance();
    }

}