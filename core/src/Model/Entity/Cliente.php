<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Cliente extends Entity
{
    
    protected $_accessible = [
        'nombre' => true,
        'email' => true,
        'password' => true,
        'telefono' => true,
        
    ];

   
    protected $_hidden = [
        'password',
    ];
}
