<?php

class router
{
    protected static $url_parts = [];

    public static function getUrlParts()
    {
        return static::$url_parts;
    }

    public static function runController($controller_name)
    {      
        // get the path to the proper controller file based on the controller name
        $controller_file = static::getControllerFile($controller_name);

        // include the file
        include $controller_file;
    }

    /**
     * find the name of the page to display in URL and determine
     * the right NAME of the controller to use
     */
    
  
  /*
    public static function getControllerName()
    {
        // get the name of the page from URL
        $page_name = request::get('page', 'home');

        // get the path to the proper controller file based on the page name
        $controller_file = static::getControllerFile($page_name);

        // if such a controller file exists
        if(file_exists($controller_file))
        {
            // return the name of the page
            return $page_name;
        }
        else
        {
            // return name 'error404'
            return 'error404';
        }
    } */

    
    public static function getControllerName()
    {
        // get the name of the page from URL
        //$page_name = request::get('page', 'home');
        $base_path = trim(parse_url(config::get('base_url'), PHP_URL_PATH), '/');
        $request_uri = trim($_SERVER['REQUEST_URI'], '/');
        $uri = preg_replace('#^'.preg_quote($base_path, '#').'#i', '', $request_uri);
        $uri_parts = explode('?', $uri); // divide the URL into path & query string
        $page_uri = ltrim($uri_parts[0], '/'); // get the uri of the current page
        static::$url_parts = explode('/', $page_uri); // break it into parts
        $controller_name = array_shift(static::$url_parts); // get the first part (contact from www.site.com/contact)

        if(trim($controller_name)=='') $controller_name = 'home'; // if none was specified, make it home

        // get the path to the proper controller file based on the page name
        $controller_file = static::getControllerFile($controller_name);

        // if such a controller file exists
        if(file_exists($controller_file))
        {
            // return the name of the page
            return $controller_name;
        }
        else
        {
            // return name 'error404'
            return 'error404';
        }
    } 

    /**
     * determines waht php file should be used to prepare a page
     * based on the page's name ('home', 'contact', 'detail', etc.)
     */
    protected static function getControllerFile($page_name)
    {
        $filename = $page_name . '.controller.php'; 
        // home.controller.php
        
        $filepath = CONTROLLERS_DIR . '/' . $filename; 
        // C:\www\eshop\system\project\controllers/home.controller.php

        return $filepath;
    }

}