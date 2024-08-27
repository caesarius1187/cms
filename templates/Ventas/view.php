<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venta'), ['action' => 'edit', $venta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venta'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ventas view content">
            <h3><?= h($venta->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $venta->hasValue('cliente') ? $this->Html->link($venta->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venta->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fnombre') ?></th>
                    <td><?= h($venta->fnombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fcuit') ?></th>
                    <td><?= h($venta->fcuit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fdomicilio') ?></th>
                    <td><?= h($venta->fdomicilio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comprobante') ?></th>
                    <td><?= $venta->hasValue('comprobante') ? $this->Html->link($venta->comprobante->nombre, ['controller' => 'Comprobantes', 'action' => 'view', $venta->comprobante->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntodeventa') ?></th>
                    <td><?= $venta->hasValue('puntodeventa') ? $this->Html->link($venta->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $venta->puntodeventa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $venta->hasValue('user') ? $this->Html->link($venta->user->username, ['controller' => 'Users', 'action' => 'view', $venta->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($venta->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comprobantedesde') ?></th>
                    <td><?= h($venta->comprobantedesde) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comprobantehasta') ?></th>
                    <td><?= h($venta->comprobantehasta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Concepto') ?></th>
                    <td><?= h($venta->concepto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condicioniva') ?></th>
                    <td><?= h($venta->condicioniva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venta->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Neto') ?></th>
                    <td><?= $venta->neto === null ? '' : $this->Number->format($venta->neto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porcentajedescuento') ?></th>
                    <td><?= $venta->porcentajedescuento === null ? '' : $this->Number->format($venta->porcentajedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importedescuento') ?></th>
                    <td><?= $venta->importedescuento === null ? '' : $this->Number->format($venta->importedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iva') ?></th>
                    <td><?= $venta->iva === null ? '' : $this->Number->format($venta->iva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $venta->total === null ? '' : $this->Number->format($venta->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imptributos') ?></th>
                    <td><?= $venta->imptributos === null ? '' : $this->Number->format($venta->imptributos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importeivaexento') ?></th>
                    <td><?= $venta->importeivaexento === null ? '' : $this->Number->format($venta->importeivaexento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importenetogravado') ?></th>
                    <td><?= $venta->importenetogravado === null ? '' : $this->Number->format($venta->importenetogravado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fneto') ?></th>
                    <td><?= $venta->fneto === null ? '' : $this->Number->format($venta->fneto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fporcentajedescuento') ?></th>
                    <td><?= $venta->fporcentajedescuento === null ? '' : $this->Number->format($venta->fporcentajedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fimportedescuento') ?></th>
                    <td><?= $venta->fimportedescuento === null ? '' : $this->Number->format($venta->fimportedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fiva') ?></th>
                    <td><?= $venta->fiva === null ? '' : $this->Number->format($venta->fiva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fimptributos') ?></th>
                    <td><?= $venta->fimptributos === null ? '' : $this->Number->format($venta->fimptributos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fimportenetoivaexento') ?></th>
                    <td><?= $venta->fimportenetoivaexento === null ? '' : $this->Number->format($venta->fimportenetoivaexento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fimportenetonogravado') ?></th>
                    <td><?= $venta->fimportenetonogravado === null ? '' : $this->Number->format($venta->fimportenetonogravado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ftotal') ?></th>
                    <td><?= $venta->ftotal === null ? '' : $this->Number->format($venta->ftotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($venta->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Servdesde') ?></th>
                    <td><?= h($venta->servdesde) ?></td>
                </tr>
                <tr>
                    <th><?= __('Servhasta') ?></th>
                    <td><?= h($venta->servhasta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vtopago') ?></th>
                    <td><?= h($venta->vtopago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($venta->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($venta->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Presupuesto') ?></th>
                    <td><?= $venta->presupuesto ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Cobrado') ?></th>
                    <td><?= $venta->cobrado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Alicuotas') ?></h4>
                <?php if (!empty($venta->alicuotas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Venta Id') ?></th>
                            <th><?= __('Idafip') ?></th>
                            <th><?= __('Baseimponible') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venta->alicuotas as $alicuota) : ?>
                        <tr>
                            <td><?= h($alicuota->id) ?></td>
                            <td><?= h($alicuota->venta_id) ?></td>
                            <td><?= h($alicuota->idafip) ?></td>
                            <td><?= h($alicuota->baseimponible) ?></td>
                            <td><?= h($alicuota->importe) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Alicuotas', 'action' => 'view', $alicuota->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Alicuotas', 'action' => 'edit', $alicuota->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alicuotas', 'action' => 'delete', $alicuota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alicuota->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Detalleventas') ?></h4>
                <?php if (!empty($venta->detalleventas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Venta Id') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th><?= __('Ganancia') ?></th>
                            <th><?= __('Tipoprecio') ?></th>
                            <th><?= __('Costo') ?></th>
                            <th><?= __('Cantidad') ?></th>
                            <th><?= __('Porcentajedescuento') ?></th>
                            <th><?= __('Importedescuento') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Codigoalicuota') ?></th>
                            <th><?= __('Alicuota') ?></th>
                            <th><?= __('Importeiva') ?></th>
                            <th><?= __('Subtotalconiva') ?></th>
                            <th><?= __('Fcantidad') ?></th>
                            <th><?= __('Fporcentajedescuento') ?></th>
                            <th><?= __('Fprecio') ?></th>
                            <th><?= __('Fimportedescuento') ?></th>
                            <th><?= __('Fsubtotal') ?></th>
                            <th><?= __('Fcodigoalicuota') ?></th>
                            <th><?= __('Falicuota') ?></th>
                            <th><?= __('Fimporteiva') ?></th>
                            <th><?= __('Fsubtotalconiva') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venta->detalleventas as $detalleventa) : ?>
                        <tr>
                            <td><?= h($detalleventa->id) ?></td>
                            <td><?= h($detalleventa->producto_id) ?></td>
                            <td><?= h($detalleventa->venta_id) ?></td>
                            <td><?= h($detalleventa->precio) ?></td>
                            <td><?= h($detalleventa->ganancia) ?></td>
                            <td><?= h($detalleventa->tipoprecio) ?></td>
                            <td><?= h($detalleventa->costo) ?></td>
                            <td><?= h($detalleventa->cantidad) ?></td>
                            <td><?= h($detalleventa->porcentajedescuento) ?></td>
                            <td><?= h($detalleventa->importedescuento) ?></td>
                            <td><?= h($detalleventa->subtotal) ?></td>
                            <td><?= h($detalleventa->codigoalicuota) ?></td>
                            <td><?= h($detalleventa->alicuota) ?></td>
                            <td><?= h($detalleventa->importeiva) ?></td>
                            <td><?= h($detalleventa->subtotalconiva) ?></td>
                            <td><?= h($detalleventa->fcantidad) ?></td>
                            <td><?= h($detalleventa->fporcentajedescuento) ?></td>
                            <td><?= h($detalleventa->fprecio) ?></td>
                            <td><?= h($detalleventa->fimportedescuento) ?></td>
                            <td><?= h($detalleventa->fsubtotal) ?></td>
                            <td><?= h($detalleventa->fcodigoalicuota) ?></td>
                            <td><?= h($detalleventa->falicuota) ?></td>
                            <td><?= h($detalleventa->fimporteiva) ?></td>
                            <td><?= h($detalleventa->fsubtotalconiva) ?></td>
                            <td><?= h($detalleventa->created) ?></td>
                            <td><?= h($detalleventa->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Detalleventas', 'action' => 'view', $detalleventa->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Detalleventas', 'action' => 'edit', $detalleventa->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Detalleventas', 'action' => 'delete', $detalleventa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalleventa->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pagos') ?></h4>
                <?php if (!empty($venta->pagos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('Compra Id') ?></th>
                            <th><?= __('Venta Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Descripcion') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Metodo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venta->pagos as $pago) : ?>
                        <tr>
                            <td><?= h($pago->id) ?></td>
                            <td><?= h($pago->cliente_id) ?></td>
                            <td><?= h($pago->puntodeventa_id) ?></td>
                            <td><?= h($pago->compra_id) ?></td>
                            <td><?= h($pago->venta_id) ?></td>
                            <td><?= h($pago->numero) ?></td>
                            <td><?= h($pago->user_id) ?></td>
                            <td><?= h($pago->fecha) ?></td>
                            <td><?= h($pago->importe) ?></td>
                            <td><?= h($pago->descripcion) ?></td>
                            <td><?= h($pago->tipo) ?></td>
                            <td><?= h($pago->metodo) ?></td>
                            <td><?= h($pago->created) ?></td>
                            <td><?= h($pago->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pagos', 'action' => 'view', $pago->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pagos', 'action' => 'edit', $pago->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagos', 'action' => 'delete', $pago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Tributos') ?></h4>
                <?php if (!empty($venta->tributos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Venta Id') ?></th>
                            <th><?= __('Idafip') ?></th>
                            <th><?= __('Desc') ?></th>
                            <th><?= __('Baseimponible') ?></th>
                            <th><?= __('Alicuota') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venta->tributos as $tributo) : ?>
                        <tr>
                            <td><?= h($tributo->id) ?></td>
                            <td><?= h($tributo->venta_id) ?></td>
                            <td><?= h($tributo->idafip) ?></td>
                            <td><?= h($tributo->desc) ?></td>
                            <td><?= h($tributo->baseimponible) ?></td>
                            <td><?= h($tributo->alicuota) ?></td>
                            <td><?= h($tributo->importe) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tributos', 'action' => 'view', $tributo->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tributos', 'action' => 'edit', $tributo->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tributos', 'action' => 'delete', $tributo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tributo->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
