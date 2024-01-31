<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Router
{
    public function __construct()
    {

    }

    public function handleRequest(array $get) : void
    {
        $pc = new PageController();

       if(isset($get["route"]) && $get["route"] === "a-propos")
       {
            $pc->about();
       }
       else if(isset($get["route"]) && $get["route"] === "contact")
       {
           $pc->contact();
       }
       else if(!isset($get["route"]))
       {
           $pc->home();
       }
       else
       {
           $pc->error404();
       }
    }
}