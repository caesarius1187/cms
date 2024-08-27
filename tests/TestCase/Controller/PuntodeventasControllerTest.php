<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PuntodeventasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PuntodeventasController Test Case
 *
 * @uses \App\Controller\PuntodeventasController
 */
class PuntodeventasControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\PuntodeventasController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\PuntodeventasController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\PuntodeventasController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\PuntodeventasController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\PuntodeventasController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
