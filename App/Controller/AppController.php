<?php


class AppController {

    protected $template = 'default';


    public function __construct()
    {
        $this->template = ROOT . 'app/views/';
    }
}