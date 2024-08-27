<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlicuotasFixture
 */
class AlicuotasFixture extends TestFixture
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
                'baseimponible' => 1,
                'importe' => 1,
            ],
        ];
        parent::init();
    }
}
