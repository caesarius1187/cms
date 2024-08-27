<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagosFixture
 */
class PagosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'cliente_id' => 1,
                'puntodeventa_id' => 1,
                'compra_id' => 1,
                'venta_id' => 1,
                'numero' => 1,
                'user_id' => '75b56ff1-f661-44ce-8f67-648e9eaa61ab',
                'fecha' => '2024-07-31 03:31:32',
                'importe' => 1,
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'tipo' => 'Lorem ipsum dolor sit amet',
                'metodo' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-31 03:31:32',
                'modified' => '2024-07-31 03:31:32',
            ],
        ];
        parent::init();
    }
}
