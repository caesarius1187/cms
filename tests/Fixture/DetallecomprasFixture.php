<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallecomprasFixture
 */
class DetallecomprasFixture extends TestFixture
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
                'compra_id' => 1,
                'producto_id' => 1,
                'cantidad' => 1,
                'precio' => 1,
                'porcentajeganancia' => 1,
            ],
        ];
        parent::init();
    }
}
