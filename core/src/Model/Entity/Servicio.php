<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Servicio extends Entity
{
   
    protected $_accessible = [
        'service' => true,
        'image' => true,
        'costo' => true,
        'cita' => true,
    ];
}
