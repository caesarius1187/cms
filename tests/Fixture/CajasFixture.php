<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CajasFixture
 */
class CajasFixture extends TestFixture
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
                'user_id' => '22a79d48-f72a-4112-bf2d-7c4f42068ce5',
                'puntodeventa_id' => 1,
                'apertura' => '2024-07-31 03:29:44',
                'importeapertura' => 1,
                'cierre' => '2024-07-31 03:29:44',
                'importecierre' => 1,
                'diferencia' => 1,
                'descripcioncierre' => 'Lorem ipsum dolor sit amet',
                'descripcionapertura' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-31 03:29:44',
                'modified' => '2024-07-31 03:29:44',
            ],
        ];
        parent::init();
    }
}
