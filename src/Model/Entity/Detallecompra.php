<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detallecompra Entity
 *
 * @property int $id
 * @property int|null $compra_id
 * @property int|null $producto_id
 * @property int|null $cantidad
 * @property float|null $precio
 * @property float|null $porcentajeganancia
 *
 * @property \App\Model\Entity\Compra $compra
 * @property \App\Model\Entity\Producto $producto
 */
class Detallecompra extends Entity
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
        'compra_id' => true,
        'producto_id' => true,
        'cantidad' => true,
        'precio' => true,
        'porcentajeganancia' => true,
        'compra' => true,
        'producto' => true,
    ];
}
