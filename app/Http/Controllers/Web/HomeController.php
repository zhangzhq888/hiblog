<?php
/**
 * Created by PhpStorm.
 * User: zhangmpy
 * Date: 2018/8/4
 * Time: 下午11:19
 */

namespace App\Http\Controllers\Web;


use Endpoints\Article\IndexArticle;
use Endpoints\Article\ShowArticle;
use Endpoints\Tag\IndexTag;
use Illuminate\Http\Request;
use Laravelladder\Core\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index(Request $request){
        $articles = IndexArticle::getInstance()
            ->setArguments([
                IndexArticle::ARGUMENT_SEARCH   => $request->input(IndexArticle::ARGUMENT_SEARCH),
                IndexArticle::ARGUMENT_CATE_ID  => $request->input(IndexArticle::ARGUMENT_CATE_ID),
                IndexArticle::ARGUMENT_TAG_ID   => $request->input(IndexArticle::ARGUMENT_TAG_ID),
                IndexArticle::ARGUMENT_PAGE     => $request->input(IndexArticle::ARGUMENT_PAGE),
                IndexArticle::ARGUMENT_P_LIMIT  => $request->input(IndexArticle::ARGUMENT_P_LIMIT),
                IndexArticle::ARGUMENT_P_OFFSET => $request->input(IndexArticle::ARGUMENT_P_OFFSET),
            ])
            ->dryRun();
        $tags = IndexTag::getInstance()->setArguments([IndexTag::ARGUMENT_P_LIMIT=>-1])->dryRun();
        $count = ceil($articles->paginator_total / $articles->paginator_perPage);
        return view(
            'index/index',
            [
                'list'   => $articles,
                'tags'   => $tags,
                'counts' => range(1,(int)$count),
                'page'   => ($request->input(IndexArticle::ARGUMENT_PAGE) ? $request->input(IndexArticle::ARGUMENT_PAGE) : 1)
            ]);
    }

    public function show(Request $request,$id){
        $article = ShowArticle::getInstance()
            ->setArguments([
                ShowArticle::ARGUMENT_ID => $id
            ])
            ->dryRun();
        return view(
            'index/show',
            [
                'article' => $article
            ]
        );
    }

    public function test($array = [1,3,5,4,2]){
        echo '原数组'.json_encode($array).'</br>';
        self::bubbleSort($array);
    }

    public function bubbleSort($arr){
        $length = count($arr);
        $counter = 1;
        for($i=0;$i<$length;$i++){
            //echo $i.'--'.$length.'<br>';
            for($j=1;$j<$length;$j++){
                echo '第'.$counter++.'次比较：'.$arr[$j].'和'.$arr[$j-1];
                if($arr[$j] < $arr[$j-1]){
                    list($arr[$j],$arr[$j-1]) = self::swap($arr[$j],$arr[$j-1]);
                    echo "--互换";
                }
                echo '--比较后：'.json_encode($arr)."</br>";
            }
            echo '---------该组结束----------</br>';
            $length --;
        }
        echo  '排序后'.json_encode($arr).'</br>';
    }

    public function swap($a,$b)
    {
        $a = $a ^ $b;
        $b = $a ^ $b;
        $a = $a ^ $b;
        return [$a,$b];
    }

}