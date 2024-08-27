<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComprasFixture
 */
class ComprasFixture extends TestFixture
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
                'user_id' => '959d4e15-e57a-4ce3-9dcd-d5ac80342b75',
                'puntodeventa_id' => 1,
                'cliente_id' => 1,
                'comprobante_id' => 1,
                'numero' => 'Lorem ipsum dolor sit amet',
                'fecha' => '2024-07-31 03:30:19',
                'neto' => 1,
                'iva' => 1,
                'total' => 1,
                'created' => '2024-07-31 03:30:19',
                'modified' => '2024-07-31 03:30:19',
            ],
        ];
        parent::init();
    }
}
