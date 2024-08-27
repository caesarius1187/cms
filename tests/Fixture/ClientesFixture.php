<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientesFixture
 */
class ClientesFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor sit amet',
                'celular' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'condicioniva' => 'Lorem ipsum dolor sit amet',
                'DNI' => 'Lorem ipsum dolor sit amet',
                'CUIT' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
