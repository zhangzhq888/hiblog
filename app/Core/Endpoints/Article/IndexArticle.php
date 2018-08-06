<?php
namespace Endpoints\Article;

use Endpoints\Base\Endpoint;
use Models\Article\Article;
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
            [static::ARGUMENT_CATE_ID,InputArgument::OPTIONAL,'CATE_ID',null],
            [static::ARGUMENT_TAG_ID,InputArgument::OPTIONAL,'TAG_ID',null],
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
        $cateId = $this->argument(static::ARGUMENT_CATE_ID);
        $tagId  = $this->argument(static::ARGUMENT_TAG_ID);
        $page   = $this->argument(static::ARGUMENT_PAGE);
        $limit  = $this->argument(static::ARGUMENT_P_LIMIT);
        $offset = $limit * (($page > 0 ? $page : 1) - 1);


        $sql = "SELECT
                    :select_columns
                FROM
                    hi_article AS a
                LEFT JOIN hi_cate AS cate ON a.cate_id = cate.id
                WHERE
                    a.deleted_at IS NULL";

        if($cateId) $sql .= "AND a.cate_id = :cate_id ";
        if($tagId)  $sql .= "AND a.tags like :tag_id ";

        $sql .= " :order_by :pagination ";

        $list = $this
            ->getUniRepo()
            ->sqlSelectListWithPagination(
                $sql,
                [
                    'cate_id' => $cateId,
                    'tag_id'  => '%'.$tagId.'%',
                ],
                [
                    'a.*',
                    'cate.name as cate_name'
                ],
                $limit,
                $offset,
                ['a.id'=>'desc']
                );
        return $list;
    }
}