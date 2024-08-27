<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detallepromotion Entity
 *
 * @property int $id
 * @property int $promotion_id
 * @property int $producto_id
 * @property float $ganancia
 * @property float $precio
 *
 * @property \App\Model\Entity\Promotion $promotion
 * @property \App\Model\Entity\Producto $producto
 */
class Detallepromotion extends Entity
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
        'promotion_id' => true,
        'producto_id' => true,
        'ganancia' => true,
        'precio' => true,
        'promotion' => true,
        'producto' => true,
    ];
}
