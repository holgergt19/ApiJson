<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicioFixture
 */
class ServicioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'servicio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'servicioId' => 1,
                'service' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'costo' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
