<?php

declare(strict_types=1);



namespace App\Controller;

use Cake\Controller\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Response;



class AppController extends Controller
{

    public function initialize(): void
    {
        

        parent::initialize();

        $this->loadComponent('RequestHandler');
        
        $this->loadComponent('Flash');


        #$this->loadComponent('Auth');
        
        



        #$this->Auth->allow('login');
       # $this->Auth->allow(['login','add']);
    }
}
