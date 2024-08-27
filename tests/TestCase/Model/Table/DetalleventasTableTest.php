<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetalleventasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetalleventasTable Test Case
 */
class DetalleventasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetalleventasTable
     */
    protected $Detalleventas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detalleventas',
        'app.Productos',
        'app.Ventas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Detalleventas') ? [] : ['className' => DetalleventasTable::class];
        $this->Detalleventas = $this->getTableLocator()->get('Detalleventas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detalleventas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetalleventasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DetalleventasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
