<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CamposopcionalesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CamposopcionalesTable Test Case
 */
class CamposopcionalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CamposopcionalesTable
     */
    protected $Camposopcionales;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Camposopcionales',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Camposopcionales') ? [] : ['className' => CamposopcionalesTable::class];
        $this->Camposopcionales = $this->getTableLocator()->get('Camposopcionales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Camposopcionales);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CamposopcionalesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
