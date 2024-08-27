<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $mail
 * @property string|null $telefono
 * @property string|null $celular
 * @property string|null $direccion
 * @property string|null $condicioniva
 * @property string|null $DNI
 * @property string|null $CUIT
 *
 * @property \App\Model\Entity\Compra[] $compras
 * @property \App\Model\Entity\Pago[] $pagos
 * @property \App\Model\Entity\Venta[] $ventas
 */
class Cliente extends Entity
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
        'mail' => true,
        'telefono' => true,
        'celular' => true,
        'direccion' => true,
        'condicioniva' => true,
        'DNI' => true,
        'CUIT' => true,
        'compras' => true,
        'pagos' => true,
        'ventas' => true,
    ];
}
