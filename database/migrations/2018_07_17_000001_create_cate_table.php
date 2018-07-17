<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Models\Article\Cate;
use Repositories\Blog\ArticleRepository;

class CreateCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE TABLE `".Cate::getFullTableTable()."` (
  `".Cate::DB_FIELD_ID."` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `".Cate::DB_FIELD_NAME."` varchar(50) NOT NULL,
  `".Cate::DB_FIELD_PID."` int(11) NOT NULL,
  `".Cate::DB_FIELD_CREATED_AT."` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `".Cate::DB_FIELD_UPDATED_AT."` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `".Cate::DB_FIELD_DELETED_AT."` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;";
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Cate::getFullTableTable());
    }
}
