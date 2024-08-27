<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComprobantesFixture
 */
class ComprobantesFixture extends TestFixture
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
                'codigo' => 'Lorem ipsum dolor sit amet',
                'tipo' => 'Lorem ipsum dolor sit amet',
                'tipodebitoasociado' => 'Lorem ipsum dolor sit amet',
                'tipocreditoasociado' => 'Lorem ipsum dolor sit amet',
                'abreviacion' => 'Lorem ipsum dolor sit amet',
                'abreviacion2' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
