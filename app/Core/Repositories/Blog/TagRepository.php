<?php
namespace Repositories\Blog;

use Models\Article\Tags;
use Repositories\Base\EloquentRepository;

class TagRepository extends EloquentRepository
{
    /**
     * 获取Repo对应的数据模型
     * @return Tags;
     */
    public static function getModel(){
        return Tags::getInstance();
    }

}