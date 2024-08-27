<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comprobante Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $codigo
 * @property string|null $tipo
 * @property string|null $tipodebitoasociado
 * @property string|null $tipocreditoasociado
 * @property string|null $abreviacion
 * @property string $abreviacion2
 *
 * @property \App\Model\Entity\Compra[] $compras
 * @property \App\Model\Entity\Venta[] $ventas
 */
class Comprobante extends Entity
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
        'nombre' => true,
        'codigo' => true,
        'tipo' => true,
        'tipodebitoasociado' => true,
        'tipocreditoasociado' => true,
        'abreviacion' => true,
        'abreviacion2' => true,
        'compras' => true,
        'ventas' => true,
    ];
}
