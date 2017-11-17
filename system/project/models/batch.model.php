<?php

class Batch_Model extends model
{
    protected static $object_class = 'Batch_Object';

    public static function retrieveByID($ID)
    {
        $query = "
            SELECT `bootcamp`.*
            FROM `bootcamp`
            WHERE `bootcamp`.`id` = ?            
        ";

        $resultset = db::query($query, [$code]);

        return static::fetchObject($resultset);
    }

    public static function getBatches()
    {
        $query = "
            SELECT *
            FROM `bootcamp`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    /*  public static function getBootcampWithUser()
    {
        $query = "
            SELECT `bootcamp`.*
            FROM `bootcamp`
            INNER JOIN `user`
            ON `document`.`country_id` = `country`.`id`
            GROUP BY `document`.`country_id`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    */
}