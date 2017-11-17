<?php

class Ajax_Controller
{
    public static function country_data()
    {   
        //FIRST RETRIEVE THE COUNTRY CODE FROM THE S_GET
        $country_code = request::get('code');

        $country_origin = Country_Model::retrieveByCode($country_code);
        if(!$country_origin)
        {
            return static::error404();
        }
        
        $users = User_Model::getUsersByCountryOrigin($country_origin->id);

        $view = new view('ajax/country_data');
        $view->country = $country_origin;
        $view->users = $users;        

        static::presentResponse($view);

    }

    public static function error404()
    {
        $view = new view('ajax/error404');
        static::presentResponse($view);
    }

    protected static function presentResponse($response)
    {
        echo $response;
        exit();
    }
}

// we determine which action from the controller to run
$url_parts = router::getUrlParts();
$action_name = array_shift($url_parts);
switch($action_name)
{
    case 'country_data':
        return Ajax_Controller::country_data();
        break;
    default:
        if(method_exists('Ajax_Controller', $action_name))
        {
            return call_user_func(array('Ajax_Controller', $action_name));
            break;
        }
        else
        {
            return Ajax_Controller::error404();
            break;
        }
        break;
}


