<?php

class star_systems  //extends controller
{
    public static $page;
    public static $totalPosts;

    function __construct ()
    {
        self::$page = (router::get('page',1))?:1;
    }

    function indexAction()
    {
      view::renderAdmin('exoplanet-list.phtml','star-systems');
    }

    function adminAction()
    {
      view::renderAdmin('exoplanet-list.phtml','star-systems');
    }



}
