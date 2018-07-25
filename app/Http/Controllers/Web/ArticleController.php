<?php

namespace App\Http\Controllers\Web;

use Endpoints\Article\IndexArticle;
use Endpoints\Article\ShowArticle;
use Illuminate\Http\Request;
use Laravelladder\Core\Controllers\BaseController;

class ArticleController extends BaseController {

    public function index(Request $request){
        return IndexArticle::getInstance()
            ->setArguments([
                IndexArticle::ARGUMENT_CATE_ID => $request->input(IndexArticle::ARGUMENT_CATE_ID),
                IndexArticle::ARGUMENT_TAG_ID  => $request->input(IndexArticle::ARGUMENT_TAG_ID)
            ])
            ->fire();
    }

    public function show(Request $request,$id){
        return ShowArticle::getInstance()
            ->setArguments([
                ShowArticle::ARGUMENT_ID => $id
            ])
            ->fire();
    }


}
