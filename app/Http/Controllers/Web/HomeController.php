<?php
/**
 * Created by PhpStorm.
 * User: zhangmpy
 * Date: 2018/8/4
 * Time: 下午11:19
 */

namespace App\Http\Controllers\Web;


use Endpoints\Article\IndexArticle;
use Endpoints\Cate\IndexCate;
use Illuminate\Http\Request;
use Laravelladder\Core\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index(Request $request){
        $articles = IndexArticle::getInstance()
            ->setArguments([
                IndexArticle::ARGUMENT_TAG_ID => $request->input(IndexArticle::ARGUMENT_TAG_ID),
                IndexArticle::ARGUMENT_TAG_ID => $request->input(IndexArticle::ARGUMENT_TAG_ID),
                IndexArticle::ARGUMENT_PAGE   => $request->input(IndexArticle::ARGUMENT_PAGE),
                IndexArticle::ARGUMENT_P_LIMIT => $request->input(IndexArticle::ARGUMENT_P_LIMIT),
                IndexArticle::ARGUMENT_P_OFFSET => $request->input(IndexArticle::ARGUMENT_P_OFFSET),
            ])
            ->dryRun();
        $count = ceil($articles->paginator_total / $articles->paginator_perPage);
        return view(
            'index/index',
            [
                'list'   => $articles,
                'counts' => range(1,(int)$count),
                'page'   => ($request->input(IndexArticle::ARGUMENT_PAGE) ? $request->input(IndexArticle::ARGUMENT_PAGE) : 1)
            ]);
    }
}