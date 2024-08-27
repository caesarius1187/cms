<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentasFixture
 */
class VentasFixture extends TestFixture
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
                'presupuesto' => 1,
                'cliente_id' => 1,
                'fnombre' => 'Lorem ipsum dolor sit amet',
                'fcuit' => 'Lorem ipsum dolor sit amet',
                'fdomicilio' => 'Lorem ipsum dolor sit amet',
                'comprobante_id' => 1,
                'puntodeventa_id' => 1,
                'user_id' => '2b200e58-3be4-42b9-9820-a1b53deb4247',
                'numero' => 'Lorem ipsum dolor sit amet',
                'fecha' => '2024-07-31',
                'neto' => 1,
                'porcentajedescuento' => 1,
                'importedescuento' => 1,
                'iva' => 1,
                'total' => 1,
                'comprobantedesde' => 'Lorem ipsum dolor sit amet',
                'comprobantehasta' => 'Lorem ipsum dolor sit amet',
                'concepto' => 'Lorem ipsum dolor sit amet',
                'servdesde' => '2024-07-31',
                'servhasta' => '2024-07-31',
                'vtopago' => '2024-07-31',
                'condicioniva' => 'Lorem ipsum dolor sit amet',
                'imptributos' => 1,
                'importeivaexento' => 1,
                'importenetogravado' => 1,
                'fneto' => 1,
                'fporcentajedescuento' => 1,
                'fimportedescuento' => 1,
                'fiva' => 1,
                'fimptributos' => 1,
                'fimportenetoivaexento' => 1,
                'fimportenetonogravado' => 1,
                'ftotal' => 1,
                'cobrado' => 1,
                'created' => '2024-07-31 03:32:57',
                'modified' => '2024-07-31 03:32:57',
            ],
        ];
        parent::init();
    }
}
