<?php
namespace Endpoints\Article;

use Endpoints\Base\Endpoint;
use Symfony\Component\Console\Input\InputArgument;

class ShowArticle extends Endpoint
{
    // 定义参数
    const ARGUMENT_ID = 'id';

    // 收参
    public function getArguments()
    {
        return [
            [static::ARGUMENT_ID,InputArgument::REQUIRED,'ID',''],
        ];
    }

    /**
     * 实现逻辑
     * @return \Laravelladder\Core\Collections\BaseCollection
     */
    public function dryRun()
    {
        $id  = $this->argument(static::ARGUMENT_ID);
        $item = $this
            ->getBlogArticleRepo()
            ->getById($id);
        return $item;
    }
}