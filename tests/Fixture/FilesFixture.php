<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FilesFixture
 */
class FilesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'path' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-31 03:31:19',
                'modified' => '2024-07-31 03:31:19',
                'procesado' => 1,
                'status' => 1,
            ],
        ];
        parent::init();
    }
}
