<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Citum extends Entity
{
    
    protected $_accessible = [
        'fecha' => true,
        'hora' => true,
        'servicioId' => true,
        'servicio' => true,
        
    ];
}
