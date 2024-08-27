<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallecomprasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallecomprasTable Test Case
 */
class DetallecomprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallecomprasTable
     */
    protected $Detallecompras;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detallecompras',
        'app.Compras',
        'app.Productos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Detallecompras') ? [] : ['className' => DetallecomprasTable::class];
        $this->Detallecompras = $this->getTableLocator()->get('Detallecompras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detallecompras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetallecomprasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DetallecomprasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
