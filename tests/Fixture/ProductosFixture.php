<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosFixture
 */
class ProductosFixture extends TestFixture
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
                'rubro_id' => 1,
                'promocion' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'precio' => 1,
                'costo' => 1,
                'ganancia' => 1,
                'gananciapack' => 1,
                'ganancia1' => 1,
                'ganancia2' => 1,
                'ganancia3' => 1,
                'ganancia4' => 1,
                'preciopack' => 1,
                'preciomayor1' => 1,
                'preciomayor2' => 1,
                'preciomayor3' => 1,
                'preciomayor4' => 1,
                'preciopack4' => 1,
                'preciopack3' => 1,
                'preciopack2' => 1,
                'preciopack1' => 1,
                'preciopack0' => 1,
                'codigo' => 'Lorem ipsum dolor sit amet',
                'codigopack' => 'Lorem ipsum dolor sit amet',
                'cantpack' => 1,
                'stockminimo' => 1,
                'stock' => 1,
                'created' => '2024-07-31 03:31:44',
                'modified' => '2024-07-31 03:31:44',
            ],
        ];
        parent::init();
    }
}
