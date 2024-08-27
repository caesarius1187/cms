<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detalleventa Entity
 *
 * @property int $id
 * @property int|null $producto_id
 * @property int|null $venta_id
 * @property float|null $precio
 * @property float|null $ganancia
 * @property string|null $tipoprecio
 * @property float|null $costo
 * @property int|null $cantidad
 * @property float|null $porcentajedescuento
 * @property float|null $importedescuento
 * @property float|null $subtotal
 * @property string|null $codigoalicuota
 * @property float|null $alicuota
 * @property float|null $importeiva
 * @property float|null $subtotalconiva
 * @property int|null $fcantidad
 * @property float|null $fporcentajedescuento
 * @property float|null $fprecio
 * @property float|null $fimportedescuento
 * @property float|null $fsubtotal
 * @property string|null $fcodigoalicuota
 * @property float|null $falicuota
 * @property float|null $fimporteiva
 * @property float|null $fsubtotalconiva
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Producto $producto
 * @property \App\Model\Entity\Venta $venta
 */
class Detalleventa extends Entity
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
        'producto_id' => true,
        'venta_id' => true,
        'precio' => true,
        'ganancia' => true,
        'tipoprecio' => true,
        'costo' => true,
        'cantidad' => true,
        'porcentajedescuento' => true,
        'importedescuento' => true,
        'subtotal' => true,
        'codigoalicuota' => true,
        'alicuota' => true,
        'importeiva' => true,
        'subtotalconiva' => true,
        'fcantidad' => true,
        'fporcentajedescuento' => true,
        'fprecio' => true,
        'fimportedescuento' => true,
        'fsubtotal' => true,
        'fcodigoalicuota' => true,
        'falicuota' => true,
        'fimporteiva' => true,
        'fsubtotalconiva' => true,
        'created' => true,
        'modified' => true,
        'producto' => true,
        'venta' => true,
    ];
}
