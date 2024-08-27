<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComprobantesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComprobantesTable Test Case
 */
class ComprobantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComprobantesTable
     */
    protected $Comprobantes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Comprobantes',
        'app.Compras',
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
        $config = $this->getTableLocator()->exists('Comprobantes') ? [] : ['className' => ComprobantesTable::class];
        $this->Comprobantes = $this->getTableLocator()->get('Comprobantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comprobantes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComprobantesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
