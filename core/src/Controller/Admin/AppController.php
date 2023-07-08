<?php

declare(strict_types=1);


namespace App\Controller\Admin;

use Cake\Controller\Controller;


class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth');

        $this->Auth->allow('login');
        $this->set('username',$this->Auth->user('username'));
    }
}
