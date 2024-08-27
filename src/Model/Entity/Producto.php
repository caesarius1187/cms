<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property int $rubro_id
 * @property bool $promocion
 * @property string|null $nombre
 * @property float|null $precio
 * @property float|null $costo
 * @property float|null $ganancia
 * @property float|null $gananciapack
 * @property float|null $ganancia1
 * @property float|null $ganancia2
 * @property float|null $ganancia3
 * @property float|null $ganancia4
 * @property float|null $preciopack
 * @property float|null $preciomayor1
 * @property float|null $preciomayor2
 * @property float|null $preciomayor3
 * @property float|null $preciomayor4
 * @property float $preciopack4
 * @property float $preciopack3
 * @property float $preciopack2
 * @property float $preciopack1
 * @property float $preciopack0
 * @property string|null $codigo
 * @property string|null $codigopack
 * @property int|null $cantpack
 * @property int|null $stockminimo
 * @property int|null $stock
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Rubro $rubro
 * @property \App\Model\Entity\Detallecompra[] $detallecompras
 * @property \App\Model\Entity\Detallepromotion[] $detallepromotions
 * @property \App\Model\Entity\Detalleventa[] $detalleventas
 * @property \App\Model\Entity\Promotion[] $promotions
 */
class Producto extends Entity
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
        'rubro_id' => true,
        'promocion' => true,
        'nombre' => true,
        'precio' => true,
        'costo' => true,
        'ganancia' => true,
        'gananciapack' => true,
        'ganancia1' => true,
        'ganancia2' => true,
        'ganancia3' => true,
        'ganancia4' => true,
        'preciopack' => true,
        'preciomayor1' => true,
        'preciomayor2' => true,
        'preciomayor3' => true,
        'preciomayor4' => true,
        'preciopack4' => true,
        'preciopack3' => true,
        'preciopack2' => true,
        'preciopack1' => true,
        'preciopack0' => true,
        'codigo' => true,
        'codigopack' => true,
        'cantpack' => true,
        'stockminimo' => true,
        'stock' => true,
        'created' => true,
        'modified' => true,
        'rubro' => true,
        'detallecompras' => true,
        'detallepromotions' => true,
        'detalleventas' => true,
        'promotions' => true,
    ];
}
