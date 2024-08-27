<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= h($cliente->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($cliente->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($cliente->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($cliente->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condicioniva') ?></th>
                    <td><?= h($cliente->condicioniva) ?></td>
                </tr>
                <tr>
                    <th><?= __('DNI') ?></th>
                    <td><?= h($cliente->DNI) ?></td>
                </tr>
                <tr>
                    <th><?= __('CUIT') ?></th>
                    <td><?= h($cliente->CUIT) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Compras') ?></h4>
                <?php if (!empty($cliente->compras)) : ?>
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
                        <?php foreach ($cliente->compras as $compra) : ?>
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
                <h4><?= __('Related Pagos') ?></h4>
                <?php if (!empty($cliente->pagos)) : ?>
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
                        <?php foreach ($cliente->pagos as $pago) : ?>
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
                <h4><?= __('Related Ventas') ?></h4>
                <?php if (!empty($cliente->ventas)) : ?>
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
                        <?php foreach ($cliente->ventas as $venta) : ?>
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
