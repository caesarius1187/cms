<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TributosFixture
 */
class TributosFixture extends TestFixture
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
                'venta_id' => 1,
                'idafip' => 1,
                'desc' => 'Lorem ipsum dolor sit amet',
                'baseimponible' => 1,
                'alicuota' => 1,
                'importe' => 1,
            ],
        ];
        parent::init();
    }
}
