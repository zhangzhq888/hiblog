<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Models\Article\Article;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE TABLE `".Article::getFullTableTable()."` (
  `".Article::DB_FIELD_ID."` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `".Article::DB_FIELD_CATE_ID."` int(11) NOT NULL COMMENT '分类ID',
  `".Article::DB_FIELD_TAGS."` varchar(50) NOT NULL DEFAULT '' COMMENT '标签',
  `".Article::DB_FIELD_TITLE."` text NOT NULL COMMENT '标题',
  `".Article::DB_FIELD_CONTENT."` text NOT NULL COMMENT '内容',
  `".Article::DB_FIELD_COUNT."` varchar(20) DEFAULT '1' COMMENT '点击量',
  `".Article::DB_FIELD_COVER."` varchar(255) DEFAULT NULL COMMENT '封面',
  `".Article::DB_FIELD_INTRO."` text COMMENT '简介',
  `".Article::DB_FIELD_SOURCE."` int(5) DEFAULT NULL COMMENT '来源',
  `".Article::DB_FIELD_CREATED_AT."` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `".Article::DB_FIELD_UPDATED_AT."` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `".Article::DB_FIELD_DELETED_AT."` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Article::getFullTableTable());
    }
}
