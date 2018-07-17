<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Models\Member\User;
use Repositories\Blog\ArticleRepository;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = "CREATE TABLE `".User::getFullTableTable()."` (
  `".User::DB_FIELD_ID."` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `".User::DB_FIELD_NAME."` varchar(50) NOT NULL,
  `".User::DB_FIELD_PASS."` char(32) NOT NULL,
  `".User::DB_FIELD_PHONE."` char(11) NOT NULL,
  `".User::DB_FIELD_PIC."` varchar(255) DEFAULT NULL,
  `".User::DB_FIELD_CREATED_AT."` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `".User::DB_FIELD_UPDATED_AT."` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  `".User::DB_FIELD_DELETED_AT."` timestamp NULL DEFAULT NULL COMMENT '删除时间',
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
        Schema::drop(User::getFullTableTable());
    }
}
