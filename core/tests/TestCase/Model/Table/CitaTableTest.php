<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CitaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CitaTable Test Case
 */
class CitaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CitaTable
     */
    protected $Cita;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cita',
        'app.Servicio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cita') ? [] : ['className' => CitaTable::class];
        $this->Cita = $this->getTableLocator()->get('Cita', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cita);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CitaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
