<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compra $compra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Compra'), ['action' => 'edit', $compra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Compra'), ['action' => 'delete', $compra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Compras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Compra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="compras view content">
            <h3><?= h($compra->numero) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $compra->hasValue('user') ? $this->Html->link($compra->user->username, ['controller' => 'Users', 'action' => 'view', $compra->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Puntodeventa') ?></th>
                    <td><?= $compra->hasValue('puntodeventa') ? $this->Html->link($compra->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $compra->puntodeventa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $compra->hasValue('cliente') ? $this->Html->link($compra->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $compra->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comprobante') ?></th>
                    <td><?= $compra->hasValue('comprobante') ? $this->Html->link($compra->comprobante->nombre, ['controller' => 'Comprobantes', 'action' => 'view', $compra->comprobante->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($compra->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($compra->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Neto') ?></th>
                    <td><?= $this->Number->format($compra->neto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iva') ?></th>
                    <td><?= $compra->iva === null ? '' : $this->Number->format($compra->iva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $compra->total === null ? '' : $this->Number->format($compra->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($compra->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($compra->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($compra->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Detallecompras') ?></h4>
                <?php if (!empty($compra->detallecompras)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Compra Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Cantidad') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th><?= __('Porcentajeganancia') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($compra->detallecompras as $detallecompra) : ?>
                        <tr>
                            <td><?= h($detallecompra->id) ?></td>
                            <td><?= h($detallecompra->compra_id) ?></td>
                            <td><?= h($detallecompra->producto_id) ?></td>
                            <td><?= h($detallecompra->cantidad) ?></td>
                            <td><?= h($detallecompra->precio) ?></td>
                            <td><?= h($detallecompra->porcentajeganancia) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Detallecompras', 'action' => 'view', $detallecompra->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Detallecompras', 'action' => 'edit', $detallecompra->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Detallecompras', 'action' => 'delete', $detallecompra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallecompra->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pagos') ?></h4>
                <?php if (!empty($compra->pagos)) : ?>
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
                        <?php foreach ($compra->pagos as $pago) : ?>
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
        </div>
    </div>
</div>
