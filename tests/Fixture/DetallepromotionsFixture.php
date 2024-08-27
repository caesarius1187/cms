<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallepromotionsFixture
 */
class DetallepromotionsFixture extends TestFixture
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
                'promotion_id' => 1,
                'producto_id' => 1,
                'ganancia' => 1,
                'precio' => 1,
            ],
        ];
        parent::init();
    }
}
