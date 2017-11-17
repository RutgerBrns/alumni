<?php 

class User_Model extends model
{
    protected static $object_class = 'User_Object';

   public static function getUsers()
    {
        // write query
        $query = "
            SELECT *
            FROM `user`
            WHERE 1
        ";
        // run query and get result set
        $resultset = db::query($query);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

     public static function getUserByUsername($username)
    {
        // write query
        $query = "
            SELECT *
            FROM `user`
            WHERE `username` = ?
        ";
        // run query and get result set
        $resultset = db::query($query, [$username]);
        
        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }

       public static function getUserByUserID($id)
    {
        // write query
        $query = "
            SELECT *
            FROM `user`
            WHERE `id` = ?
        ";
        // run query and get result set
        $resultset = db::query($query, [$id]);
        
        // retrieve all the rows as objects
        $objects = static::fetchObject($resultset);

        return $objects;
    }


     public static function getUsersByCountryOrigin($country_origin)
    {
        // write query
        $query = "
            SELECT *
            FROM `user`
            WHERE `country_origin_id` = ?
        ";
        // run query and get result set
        $resultset = db::query($query, [$country_origin]);
        
        // retrieve all the rows as objects
        $objects = static::fetchObjects($resultset);

        return $objects;
    }

      public static function getUserByCurrentCountry($current_country)
        {
            // write query
            $query = "
                SELECT *
                FROM `user`
                WHERE `current_country` = ?
            ";
            // run query and get result set
            $resultset = db::query($query, [$current_country]);
            
            // retrieve all the rows as objects
            $objects = static::fetchObject($resultset);

            return $objects;
        }

     
    public static function createUserQuick($user_email, $username, $password)
    {
        // write query
        $query = "
            INSERT INTO `user` (email, username, password)
            VALUES (?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$user_email, $user_name, $user_password]);      

    }

    public static function createUserFull($username, $password, $email, $first_name, $last_name, $phone, $current_city, $birthday, $country_current_id, $country_origin_id, $linkedin, $facebook, $github)
    {
        // write query
        $query = "
            INSERT INTO `user` (username, password, email, first_name, last_name, phone, current_city, birthday, country_current_id, country_origin_id, linkedin, facebook, github)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ";

        //let op dat de gegevens dienen te worden aangeleverd in een array vorm [variabelen]
        db::query($query, [$username, $password, $email, $first_name, $last_name, $phone, $current_city, $birthday, $country_current_id, $country_origin_id, $linkedin, $facebook, $github]);      

    }

    public static function deleteUserByID($id)
        {
            // write query
            $query = "
                DELETE FROM `user`
                WHERE `id` = ?
            ";
           
            db::query($query, [$id]);   
        }
}