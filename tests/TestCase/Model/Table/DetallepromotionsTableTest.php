<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallepromotionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallepromotionsTable Test Case
 */
class DetallepromotionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallepromotionsTable
     */
    protected $Detallepromotions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Detallepromotions',
        'app.Promotions',
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
        $config = $this->getTableLocator()->exists('Detallepromotions') ? [] : ['className' => DetallepromotionsTable::class];
        $this->Detallepromotions = $this->getTableLocator()->get('Detallepromotions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Detallepromotions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DetallepromotionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DetallepromotionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
