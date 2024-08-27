<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CamposopcionalesFixture
 */
class CamposopcionalesFixture extends TestFixture
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
                'idafip' => 1,
                'valor' => 1,
            ],
        ];
        parent::init();
    }
}
