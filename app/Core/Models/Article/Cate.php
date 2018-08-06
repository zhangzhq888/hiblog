<?php
namespace  Models\Article;

use Models\Base\EloquentModel;

class Cate extends EloquentModel
{
    const TABLE_NAME = "cate";
    protected $table = self::TABLE_NAME;

    public static function getFullTableTable(){
        return config('database.connections.mysql.prefix').self::TABLE_NAME;
    }

    const DB_FIELD_ID         = 'id';
    const DB_FIELD_PID        = 'pid';
    const DB_FIELD_NAME       = 'name';
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
        self::DB_FIELD_PID,
        self::DB_FIELD_NAME,
        self::DB_FIELD_CREATED_AT,
        self::DB_FIELD_UPDATED_AT,
        self::DB_FIELD_DELETED_AT,
    ];
}