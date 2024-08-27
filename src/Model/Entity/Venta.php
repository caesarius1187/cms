<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venta Entity
 *
 * @property int $id
 * @property bool|null $presupuesto
 * @property int|null $cliente_id
 * @property string|null $fnombre
 * @property string|null $fcuit
 * @property string|null $fdomicilio
 * @property int|null $comprobante_id
 * @property int|null $puntodeventa_id
 * @property string|null $user_id
 * @property string|null $numero
 * @property \Cake\I18n\Date|null $fecha
 * @property float|null $neto
 * @property float|null $porcentajedescuento
 * @property float|null $importedescuento
 * @property float|null $iva
 * @property float|null $total
 * @property string|null $comprobantedesde
 * @property string|null $comprobantehasta
 * @property string|null $concepto
 * @property \Cake\I18n\Date|null $servdesde
 * @property \Cake\I18n\Date|null $servhasta
 * @property \Cake\I18n\Date|null $vtopago
 * @property string|null $condicioniva
 * @property float|null $imptributos
 * @property float|null $importeivaexento
 * @property float|null $importenetogravado
 * @property float|null $fneto
 * @property float|null $fporcentajedescuento
 * @property float|null $fimportedescuento
 * @property float|null $fiva
 * @property float|null $fimptributos
 * @property float|null $fimportenetoivaexento
 * @property float|null $fimportenetonogravado
 * @property float|null $ftotal
 * @property bool $cobrado
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Comprobante $comprobante
 * @property \App\Model\Entity\Puntodeventa $puntodeventa
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Alicuota[] $alicuotas
 * @property \App\Model\Entity\Detalleventa[] $detalleventas
 * @property \App\Model\Entity\Pago[] $pagos
 * @property \App\Model\Entity\Tributo[] $tributos
 */
class Venta extends Entity
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
        'presupuesto' => true,
        'cliente_id' => true,
        'fnombre' => true,
        'fcuit' => true,
        'fdomicilio' => true,
        'comprobante_id' => true,
        'puntodeventa_id' => true,
        'user_id' => true,
        'numero' => true,
        'fecha' => true,
        'neto' => true,
        'porcentajedescuento' => true,
        'importedescuento' => true,
        'iva' => true,
        'total' => true,
        'comprobantedesde' => true,
        'comprobantehasta' => true,
        'concepto' => true,
        'servdesde' => true,
        'servhasta' => true,
        'vtopago' => true,
        'condicioniva' => true,
        'imptributos' => true,
        'importeivaexento' => true,
        'importenetogravado' => true,
        'fneto' => true,
        'fporcentajedescuento' => true,
        'fimportedescuento' => true,
        'fiva' => true,
        'fimptributos' => true,
        'fimportenetoivaexento' => true,
        'fimportenetonogravado' => true,
        'ftotal' => true,
        'cobrado' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'comprobante' => true,
        'puntodeventa' => true,
        'user' => true,
        'alicuotas' => true,
        'detalleventas' => true,
        'pagos' => true,
        'tributos' => true,
    ];
}
