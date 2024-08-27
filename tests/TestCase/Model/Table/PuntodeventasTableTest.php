<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PuntodeventasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PuntodeventasTable Test Case
 */
class PuntodeventasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PuntodeventasTable
     */
    protected $Puntodeventas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Puntodeventas',
        'app.Cajas',
        'app.Compras',
        'app.Extracciones',
        'app.Pagos',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('Puntodeventas') ? [] : ['className' => PuntodeventasTable::class];
        $this->Puntodeventas = $this->getTableLocator()->get('Puntodeventas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Puntodeventas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PuntodeventasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
