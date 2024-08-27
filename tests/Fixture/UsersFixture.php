<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => 'e2ff9f99-cbb3-4828-b257-f8f4a1954d53',
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'token' => 'Lorem ipsum dolor sit amet',
                'token_expires' => '2024-07-31 03:32:50',
                'api_token' => 'Lorem ipsum dolor sit amet',
                'activation_date' => '2024-07-31 03:32:50',
                'secret' => 'Lorem ipsum dolor sit amet',
                'secret_verified' => 1,
                'tos_date' => '2024-07-31 03:32:50',
                'active' => 1,
                'is_superuser' => 1,
                'role' => 'Lorem ipsum dolor sit amet',
                'puntodeventa_id' => 1,
                'created' => '2024-07-31 03:32:50',
                'modified' => '2024-07-31 03:32:50',
            ],
        ];
        parent::init();
    }
}
