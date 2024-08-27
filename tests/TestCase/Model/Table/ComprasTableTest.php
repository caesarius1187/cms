<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComprasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComprasTable Test Case
 */
class ComprasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComprasTable
     */
    protected $Compras;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Compras',
        'app.Users',
        'app.Puntodeventas',
        'app.Clientes',
        'app.Comprobantes',
        'app.Detallecompras',
        'app.Pagos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Compras') ? [] : ['className' => ComprasTable::class];
        $this->Compras = $this->getTableLocator()->get('Compras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Compras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComprasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ComprasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
