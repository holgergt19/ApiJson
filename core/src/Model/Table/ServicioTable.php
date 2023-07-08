<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ServicioTable extends Table
{
   
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('servicio');
        $this->setDisplayField('servicioId');
        $this->setPrimaryKey('servicioId');
        $this->hasMany('cita');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('service')
            ->maxLength('service', 255)
            ->requirePresence('service', 'create')
            ->notEmptyString('service');

        $validator
            ->allowEmptyFile('image')
            ->add('image', [
                'mimeType' => [
                    'rule' => ['mimeType', ['image/jpg', 'image/png', 'image/jpeg']],
                    'message' => 'Please upload only jpg and png.',
                ],
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '1MB'],
                    'message' => 'Image file size must be less than 1MB.',
                ],
            ]);

        $validator
            ->scalar('costo')
            ->maxLength('costo', 20)
            ->requirePresence('costo', 'create')
            ->notEmptyString('costo');

        return $validator;
    }
}
