<?php
namespace Endpoints\Article;

use Endpoints\Base\Endpoint;
use Symfony\Component\Console\Input\InputArgument;

class IndexArticle extends Endpoint
{
    // 定义参数
    const ARGUMENT_CATE_ID = 'cate_id';
    const ARGUMENT_TAG_ID  = 'tag_id';

    // 收参
    public function getArguments()
    {
        return [
            [static::ARGUMENT_P_LIMIT,InputArgument::OPTIONAL,'获取多少数据','10'],
            [static::ARGUMENT_P_OFFSET,InputArgument::OPTIONAL,'跳过多少数据',0],
        ];
    }

    /**
     * 实现逻辑
     * @return \Laravelladder\Core\Collections\BaseCollection
     */
    public function dryRun()
    {
        $limit  = $this->argument(static::ARGUMENT_P_LIMIT);
        $offset = $this->argument(static::ARGUMENT_P_OFFSET);
        $list = $this
            ->getBlogArticleRepo()
            ->getListByFilters([],$limit,$offset);
        return $list;
    }
}