<?php
namespace  Models\Article;

use Models\Base\EloquentModel;

class Article extends EloquentModel
{
    const TABLE_NAME = "article";
    protected $table = self::TABLE_NAME;

    public static function getFullTableTable(){
        return config('database.connections.mysql.prefix').self::TABLE_NAME;
    }

    const DB_FIELD_ID         = 'id';
    const DB_FIELD_CATE_ID    = 'cate_id';
    const DB_FIELD_TAGS       = 'tags';
    const DB_FIELD_TITLE      = 'title';
    const DB_FIELD_CONTENT    = 'content';
    const DB_FIELD_COUNT      = 'count';
    const DB_FIELD_COVER      = 'cover';
    const DB_FIELD_INTRO      = 'intro';
    const DB_FIELD_SOURCE     = 'source';
    const DB_FIELD_CREATED_AT = 'created_at';
    const DB_FIELD_UPDATED_AT = 'updated_at';
    const DB_FIELD_DELETED_AT = 'deleted_at';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::DB_FIELD_ID,
        self::DB_FIELD_CATE_ID,
        self::DB_FIELD_TAGS,
        self::DB_FIELD_TITLE,
        self::DB_FIELD_CONTENT,
        self::DB_FIELD_COUNT,
        self::DB_FIELD_COVER,
        self::DB_FIELD_INTRO,
        self::DB_FIELD_SOURCE,
        self::DB_FIELD_CREATED_AT,
        self::DB_FIELD_UPDATED_AT,
        self::DB_FIELD_DELETED_AT,
    ];
}