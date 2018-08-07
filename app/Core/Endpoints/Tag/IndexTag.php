<?php
namespace Endpoints\Tag;

use Endpoints\Base\Endpoint;
use Models\Article\Article;
use Symfony\Component\Console\Input\InputArgument;

class IndexTag extends Endpoint
{
    // 收参
    public function getArguments()
    {
        return [
            [static::ARGUMENT_PAGE,InputArgument::OPTIONAL,'页数',1],
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
        $page   = $this->argument(static::ARGUMENT_PAGE);
        $limit  = $this->argument(static::ARGUMENT_P_LIMIT);
        $offset = $limit * (($page > 0 ? $page : 1) - 1);

        $f = [];

        $list = $this
            ->getBlogTagRepo()
            ->getListByFilters($f,$limit,$offset,['id'=>'desc']);
        return $list;
    }
}