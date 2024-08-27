<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Puntodeventa Entity
 *
 * @property int $id
 * @property int $numero
 * @property string $nombre
 * @property string $descripcion
 * @property bool|null $facturacionhabilitada
 *
 * @property \App\Model\Entity\Caja[] $cajas
 * @property \App\Model\Entity\Compra[] $compras
 * @property \App\Model\Entity\Extraccione[] $extracciones
 * @property \App\Model\Entity\Pago[] $pagos
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Venta[] $ventas
 */
class Puntodeventa extends Entity
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
        'numero' => true,
        'nombre' => true,
        'descripcion' => true,
        'facturacionhabilitada' => true,
        'cajas' => true,
        'compras' => true,
        'extracciones' => true,
        'pagos' => true,
        'users' => true,
        'ventas' => true,
    ];
}
