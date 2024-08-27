<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtraccionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtraccionesTable Test Case
 */
class ExtraccionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExtraccionesTable
     */
    protected $Extracciones;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Extracciones',
        'app.Puntodeventas',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Extracciones') ? [] : ['className' => ExtraccionesTable::class];
        $this->Extracciones = $this->getTableLocator()->get('Extracciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Extracciones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExtraccionesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExtraccionesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
