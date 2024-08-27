<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comprobante $comprobante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comprobante'), ['action' => 'edit', $comprobante->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comprobante'), ['action' => 'delete', $comprobante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comprobante->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comprobantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comprobante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comprobantes view content">
            <h3><?= h($comprobante->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($comprobante->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($comprobante->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($comprobante->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipodebitoasociado') ?></th>
                    <td><?= h($comprobante->tipodebitoasociado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipocreditoasociado') ?></th>
                    <td><?= h($comprobante->tipocreditoasociado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abreviacion') ?></th>
                    <td><?= h($comprobante->abreviacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Abreviacion2') ?></th>
                    <td><?= h($comprobante->abreviacion2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($comprobante->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Compras') ?></h4>
                <?php if (!empty($comprobante->compras)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Comprobante Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Neto') ?></th>
                            <th><?= __('Iva') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($comprobante->compras as $compra) : ?>
                        <tr>
                            <td><?= h($compra->id) ?></td>
                            <td><?= h($compra->user_id) ?></td>
                            <td><?= h($compra->puntodeventa_id) ?></td>
                            <td><?= h($compra->cliente_id) ?></td>
                            <td><?= h($compra->comprobante_id) ?></td>
                            <td><?= h($compra->numero) ?></td>
                            <td><?= h($compra->fecha) ?></td>
                            <td><?= h($compra->neto) ?></td>
                            <td><?= h($compra->iva) ?></td>
                            <td><?= h($compra->total) ?></td>
                            <td><?= h($compra->created) ?></td>
                            <td><?= h($compra->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Compras', 'action' => 'view', $compra->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Compras', 'action' => 'edit', $compra->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Compras', 'action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ventas') ?></h4>
                <?php if (!empty($comprobante->ventas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Presupuesto') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Fnombre') ?></th>
                            <th><?= __('Fcuit') ?></th>
                            <th><?= __('Fdomicilio') ?></th>
                            <th><?= __('Comprobante Id') ?></th>
                            <th><?= __('Puntodeventa Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Neto') ?></th>
                            <th><?= __('Porcentajedescuento') ?></th>
                            <th><?= __('Importedescuento') ?></th>
                            <th><?= __('Iva') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Comprobantedesde') ?></th>
                            <th><?= __('Comprobantehasta') ?></th>
                            <th><?= __('Concepto') ?></th>
                            <th><?= __('Servdesde') ?></th>
                            <th><?= __('Servhasta') ?></th>
                            <th><?= __('Vtopago') ?></th>
                            <th><?= __('Condicioniva') ?></th>
                            <th><?= __('Imptributos') ?></th>
                            <th><?= __('Importeivaexento') ?></th>
                            <th><?= __('Importenetogravado') ?></th>
                            <th><?= __('Fneto') ?></th>
                            <th><?= __('Fporcentajedescuento') ?></th>
                            <th><?= __('Fimportedescuento') ?></th>
                            <th><?= __('Fiva') ?></th>
                            <th><?= __('Fimptributos') ?></th>
                            <th><?= __('Fimportenetoivaexento') ?></th>
                            <th><?= __('Fimportenetonogravado') ?></th>
                            <th><?= __('Ftotal') ?></th>
                            <th><?= __('Cobrado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($comprobante->ventas as $venta) : ?>
                        <tr>
                            <td><?= h($venta->id) ?></td>
                            <td><?= h($venta->presupuesto) ?></td>
                            <td><?= h($venta->cliente_id) ?></td>
                            <td><?= h($venta->fnombre) ?></td>
                            <td><?= h($venta->fcuit) ?></td>
                            <td><?= h($venta->fdomicilio) ?></td>
                            <td><?= h($venta->comprobante_id) ?></td>
                            <td><?= h($venta->puntodeventa_id) ?></td>
                            <td><?= h($venta->user_id) ?></td>
                            <td><?= h($venta->numero) ?></td>
                            <td><?= h($venta->fecha) ?></td>
                            <td><?= h($venta->neto) ?></td>
                            <td><?= h($venta->porcentajedescuento) ?></td>
                            <td><?= h($venta->importedescuento) ?></td>
                            <td><?= h($venta->iva) ?></td>
                            <td><?= h($venta->total) ?></td>
                            <td><?= h($venta->comprobantedesde) ?></td>
                            <td><?= h($venta->comprobantehasta) ?></td>
                            <td><?= h($venta->concepto) ?></td>
                            <td><?= h($venta->servdesde) ?></td>
                            <td><?= h($venta->servhasta) ?></td>
                            <td><?= h($venta->vtopago) ?></td>
                            <td><?= h($venta->condicioniva) ?></td>
                            <td><?= h($venta->imptributos) ?></td>
                            <td><?= h($venta->importeivaexento) ?></td>
                            <td><?= h($venta->importenetogravado) ?></td>
                            <td><?= h($venta->fneto) ?></td>
                            <td><?= h($venta->fporcentajedescuento) ?></td>
                            <td><?= h($venta->fimportedescuento) ?></td>
                            <td><?= h($venta->fiva) ?></td>
                            <td><?= h($venta->fimptributos) ?></td>
                            <td><?= h($venta->fimportenetoivaexento) ?></td>
                            <td><?= h($venta->fimportenetonogravado) ?></td>
                            <td><?= h($venta->ftotal) ?></td>
                            <td><?= h($venta->cobrado) ?></td>
                            <td><?= h($venta->created) ?></td>
                            <td><?= h($venta->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ventas', 'action' => 'view', $venta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ventas', 'action' => 'edit', $venta->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ventas', 'action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?>
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
