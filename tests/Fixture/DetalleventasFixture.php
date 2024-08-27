<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetalleventasFixture
 */
class DetalleventasFixture extends TestFixture
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
                'producto_id' => 1,
                'venta_id' => 1,
                'precio' => 1,
                'ganancia' => 1,
                'tipoprecio' => 'Lorem ipsum dolor sit amet',
                'costo' => 1,
                'cantidad' => 1,
                'porcentajedescuento' => 1,
                'importedescuento' => 1,
                'subtotal' => 1,
                'codigoalicuota' => 'Lorem ipsum dolor sit amet',
                'alicuota' => 1,
                'importeiva' => 1,
                'subtotalconiva' => 1,
                'fcantidad' => 1,
                'fporcentajedescuento' => 1,
                'fprecio' => 1,
                'fimportedescuento' => 1,
                'fsubtotal' => 1,
                'fcodigoalicuota' => 'Lorem ipsum dolor sit amet',
                'falicuota' => 1,
                'fimporteiva' => 1,
                'fsubtotalconiva' => 1,
                'created' => '2024-07-31 03:30:58',
                'modified' => '2024-07-31 03:30:58',
            ],
        ];
        parent::init();
    }
}
