<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlicuotasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlicuotasTable Test Case
 */
class AlicuotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlicuotasTable
     */
    protected $Alicuotas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Alicuotas',
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
        $config = $this->getTableLocator()->exists('Alicuotas') ? [] : ['className' => AlicuotasTable::class];
        $this->Alicuotas = $this->getTableLocator()->get('Alicuotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alicuotas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlicuotasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AlicuotasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
