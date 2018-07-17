<?php
namespace Endpoints\Article;

use Endpoints\Base\Endpoint;

class IndexArticle extends Endpoint
{


    public function dryRun()
    {
        $list = $this
            ->getBlogArticleRepo()
            ->getListByFilters([],5,0,[],true)->first();
        dd($list);
    }
}