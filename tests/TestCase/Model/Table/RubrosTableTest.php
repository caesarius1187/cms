<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RubrosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RubrosTable Test Case
 */
class RubrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RubrosTable
     */
    protected $Rubros;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Rubros',
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
        $config = $this->getTableLocator()->exists('Rubros') ? [] : ['className' => RubrosTable::class];
        $this->Rubros = $this->getTableLocator()->get('Rubros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rubros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RubrosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
