<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


class User extends Entity
{
    
    protected $_accessible = [
        'username' => true,
        'email' => true,
        'password' => true,
        'created' => true,
    ];

    
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
