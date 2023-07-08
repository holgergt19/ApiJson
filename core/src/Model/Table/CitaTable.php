<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class CitaTable extends Table
{
    
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cita');
        $this->setDisplayField('citasId');
        $this->setPrimaryKey('citasId');
        $this->belongsTo('Servicio', [
            'foreignKey' => 'servicioId',
            'joinType' => 'INNER',
        ]);
        
    }

    
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmptyTime('hora');

        $validator
            ->integer('servicioId')
            ->requirePresence('servicioId', 'create')
            ->notEmptyString('servicioId');
        

        return $validator;
    }
}
