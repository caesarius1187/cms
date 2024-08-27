<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pago Entity
 *
 * @property int $id
 * @property int|null $cliente_id
 * @property int|null $puntodeventa_id
 * @property int $compra_id
 * @property int $venta_id
 * @property int $numero
 * @property string|null $user_id
 * @property \Cake\I18n\DateTime|null $fecha
 * @property float|null $importe
 * @property string|null $descripcion
 * @property string $tipo
 * @property string $metodo
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Puntodeventa $puntodeventa
 * @property \App\Model\Entity\Compra $compra
 * @property \App\Model\Entity\Venta $venta
 * @property \App\Model\Entity\User $user
 */
class Pago extends Entity
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
        'cliente_id' => true,
        'puntodeventa_id' => true,
        'compra_id' => true,
        'venta_id' => true,
        'numero' => true,
        'user_id' => true,
        'fecha' => true,
        'importe' => true,
        'descripcion' => true,
        'tipo' => true,
        'metodo' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'puntodeventa' => true,
        'compra' => true,
        'venta' => true,
        'user' => true,
    ];
}
