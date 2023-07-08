<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ClienteTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cliente');
        $this->setDisplayField('clienteId');
        $this->setPrimaryKey('clienteId');
        

        
    }

    
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        return $validator;
    }
}
