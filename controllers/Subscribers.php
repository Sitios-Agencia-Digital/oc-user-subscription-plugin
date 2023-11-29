<?php

namespace sitiosagenciadigital\subscribe\Controllers;

use BackendMenu;

class Subscribers extends \Backend\Classes\Controller
{

    public $implement = ['Backend.Behaviors.ListController'];

    public $listConfig = 'list_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('sitiosagenciadigital.subscribe', 'subscribe', 'subscribers');
    }
}
