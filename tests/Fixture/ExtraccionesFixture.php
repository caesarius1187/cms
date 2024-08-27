<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExtraccionesFixture
 */
class ExtraccionesFixture extends TestFixture
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
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'importe' => 1,
                'saldo' => 1,
                'fecha' => '2024-07-31 03:31:09',
                'puntodeventa_id' => 1,
                'user_id' => 'c28bca03-1db2-44b2-8d47-f1f88ac413fb',
                'created' => '2024-07-31 03:31:09',
                'modified' => '2024-07-31 03:31:09',
            ],
        ];
        parent::init();
    }
}
