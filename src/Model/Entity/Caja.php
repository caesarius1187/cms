<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Caja Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property int|null $puntodeventa_id
 * @property \Cake\I18n\DateTime|null $apertura
 * @property float|null $importeapertura
 * @property \Cake\I18n\DateTime|null $cierre
 * @property float|null $importecierre
 * @property float|null $diferencia
 * @property string|null $descripcioncierre
 * @property string|null $descripcionapertura
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Puntodeventa $puntodeventa
 */
class Caja extends Entity
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
        'user_id' => true,
        'puntodeventa_id' => true,
        'apertura' => true,
        'importeapertura' => true,
        'cierre' => true,
        'importecierre' => true,
        'diferencia' => true,
        'descripcioncierre' => true,
        'descripcionapertura' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'puntodeventa' => true,
    ];
}
