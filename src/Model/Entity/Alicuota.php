<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alicuota Entity
 *
 * @property int $id
 * @property int|null $venta_id
 * @property int|null $idafip
 * @property float|null $baseimponible
 * @property float|null $importe
 *
 * @property \App\Model\Entity\Venta $venta
 */
class Alicuota extends Entity
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
        'venta_id' => true,
        'idafip' => true,
        'baseimponible' => true,
        'importe' => true,
        'venta' => true,
    ];
}
