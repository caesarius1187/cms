<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Extraccione Entity
 *
 * @property int $id
 * @property string|null $descripcion
 * @property float|null $importe
 * @property float|null $saldo
 * @property \Cake\I18n\DateTime|null $fecha
 * @property int|null $puntodeventa_id
 * @property string|null $user_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Puntodeventa $puntodeventa
 * @property \App\Model\Entity\User $user
 */
class Extraccione extends Entity
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
        'descripcion' => true,
        'importe' => true,
        'saldo' => true,
        'fecha' => true,
        'puntodeventa_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'puntodeventa' => true,
        'user' => true,
    ];
}
