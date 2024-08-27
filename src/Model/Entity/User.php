<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $username
 * @property string|null $email
 * @property string $password
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $token
 * @property \Cake\I18n\DateTime|null $token_expires
 * @property string|null $api_token
 * @property \Cake\I18n\DateTime|null $activation_date
 * @property string|null $secret
 * @property bool|null $secret_verified
 * @property \Cake\I18n\DateTime|null $tos_date
 * @property bool $active
 * @property bool $is_superuser
 * @property string|null $role
 * @property int|null $puntodeventa_id
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Puntodeventa $puntodeventa
 * @property \App\Model\Entity\Caja[] $cajas
 * @property \App\Model\Entity\Compra[] $compras
 * @property \App\Model\Entity\Extraccione[] $extracciones
 * @property \App\Model\Entity\Pago[] $pagos
 * @property \App\Model\Entity\SocialAccount[] $social_accounts
 * @property \App\Model\Entity\Venta[] $ventas
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'username' => true,
        'email' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'token' => true,
        'token_expires' => true,
        'api_token' => true,
        'activation_date' => true,
        'secret' => true,
        'secret_verified' => true,
        'tos_date' => true,
        'active' => true,
        'is_superuser' => true,
        'role' => true,
        'puntodeventa_id' => true,
        'created' => true,
        'modified' => true,
        'puntodeventa' => true,
        'cajas' => true,
        'compras' => true,
        'extracciones' => true,
        'pagos' => true,
        'social_accounts' => true,
        'ventas' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
        'token',
    ];
}
