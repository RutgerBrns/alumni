<?php

class Country_Model extends model
{
    protected static $object_class = 'Country_Object';

    public static function retrieveByCode($code)
    {
        $query = "
            SELECT `country_origin`.*
            FROM `country_origin`
            WHERE `country_origin`.`ISO_code` = ?
            LIMIT 0, 1
        ";

        $resultset = db::query($query, [$code]);

        return static::fetchObject($resultset);
    }

    public static function getCountries()
    {
        $query = "
            SELECT *
            FROM `country_origin`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    //GET THE ISO-CODES FROM ALL THE COUNTRIES THAT HAVE USERS THAT ARE ORIGINALLY FROM THERE
     public static function getIsoCodesWithOriginUsers()
    {
        $query = "
          SELECT `country_origin`.`ISO_code`
          FROM `user`
            INNER JOIN `country_origin`
        ON `user`.`country_origin_id` = `country_origin`.`id`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    //GET THE ISO-CODES FROM ALL THE COUNTRIES THAT HAVE USERS THAT ARE CURRENTLY THERE
     public static function getIsoCodesWithCurrentUsers()
    {
        $query = "
          SELECT `country_current`.`ISO_code`
          FROM `user`
            INNER JOIN `country_current`
        ON `user`.`country_current_id` = `country_current`.`id`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

    //Return all the users that have current countries set (including the countries ISO_codes and names)
     public static function getCurrentCountriesWithUsers()
    {
        $query = "
        SELECT `user`.*,
            `country_origin`.*
        FROM `user`
        INNER JOIN `country_origin`
        ON `user`.`country_origin_id` = `country_origin`.`id`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }


    //Return all the users that have origin countries set (including the countries ISO_codes and names)
     public static function getOriginCountriesWithUsers()
    {
        $query = "
        SELECT `user`.*,
            `country_current`.*
        FROM `user`
        INNER JOIN `country_current`
        ON `user`.`country_current_id` = `country_current`.`id`
        ";

        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }

     public static function retrieveByID($id)
    {
        $query = "
            SELECT `country_origin`.*
            FROM `country_origin`
            WHERE `country_origin`.`id` = ?
            LIMIT 0, 1
        ";

        $resultset = db::query($query, [$id]);

        return static::fetchObject($resultset);
    }
}