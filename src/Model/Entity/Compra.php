<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compra Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property int|null $puntodeventa_id
 * @property int|null $cliente_id
 * @property int|null $comprobante_id
 * @property string $numero
 * @property \Cake\I18n\DateTime $fecha
 * @property float $neto
 * @property float|null $iva
 * @property float|null $total
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Puntodeventa $puntodeventa
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Comprobante $comprobante
 * @property \App\Model\Entity\Detallecompra[] $detallecompras
 * @property \App\Model\Entity\Pago[] $pagos
 */
class Compra extends Entity
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
        'cliente_id' => true,
        'comprobante_id' => true,
        'numero' => true,
        'fecha' => true,
        'neto' => true,
        'iva' => true,
        'total' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'puntodeventa' => true,
        'cliente' => true,
        'comprobante' => true,
        'detallecompras' => true,
        'pagos' => true,
    ];
}
