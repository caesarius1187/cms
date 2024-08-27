<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalleventa $detalleventa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detalleventa'), ['action' => 'edit', $detalleventa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detalleventa'), ['action' => 'delete', $detalleventa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalleventa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detalleventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detalleventa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detalleventas view content">
            <h3><?= h($detalleventa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $detalleventa->hasValue('producto') ? $this->Html->link($detalleventa->producto->id, ['controller' => 'Productos', 'action' => 'view', $detalleventa->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Venta') ?></th>
                    <td><?= $detalleventa->hasValue('venta') ? $this->Html->link($detalleventa->venta->id, ['controller' => 'Ventas', 'action' => 'view', $detalleventa->venta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipoprecio') ?></th>
                    <td><?= h($detalleventa->tipoprecio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigoalicuota') ?></th>
                    <td><?= h($detalleventa->codigoalicuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fcodigoalicuota') ?></th>
                    <td><?= h($detalleventa->fcodigoalicuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detalleventa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $detalleventa->precio === null ? '' : $this->Number->format($detalleventa->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia') ?></th>
                    <td><?= $detalleventa->ganancia === null ? '' : $this->Number->format($detalleventa->ganancia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= $detalleventa->costo === null ? '' : $this->Number->format($detalleventa->costo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $detalleventa->cantidad === null ? '' : $this->Number->format($detalleventa->cantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porcentajedescuento') ?></th>
                    <td><?= $detalleventa->porcentajedescuento === null ? '' : $this->Number->format($detalleventa->porcentajedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importedescuento') ?></th>
                    <td><?= $detalleventa->importedescuento === null ? '' : $this->Number->format($detalleventa->importedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $detalleventa->subtotal === null ? '' : $this->Number->format($detalleventa->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alicuota') ?></th>
                    <td><?= $detalleventa->alicuota === null ? '' : $this->Number->format($detalleventa->alicuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importeiva') ?></th>
                    <td><?= $detalleventa->importeiva === null ? '' : $this->Number->format($detalleventa->importeiva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotalconiva') ?></th>
                    <td><?= $detalleventa->subtotalconiva === null ? '' : $this->Number->format($detalleventa->subtotalconiva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fcantidad') ?></th>
                    <td><?= $detalleventa->fcantidad === null ? '' : $this->Number->format($detalleventa->fcantidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fporcentajedescuento') ?></th>
                    <td><?= $detalleventa->fporcentajedescuento === null ? '' : $this->Number->format($detalleventa->fporcentajedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fprecio') ?></th>
                    <td><?= $detalleventa->fprecio === null ? '' : $this->Number->format($detalleventa->fprecio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fimportedescuento') ?></th>
                    <td><?= $detalleventa->fimportedescuento === null ? '' : $this->Number->format($detalleventa->fimportedescuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fsubtotal') ?></th>
                    <td><?= $detalleventa->fsubtotal === null ? '' : $this->Number->format($detalleventa->fsubtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Falicuota') ?></th>
                    <td><?= $detalleventa->falicuota === null ? '' : $this->Number->format($detalleventa->falicuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fimporteiva') ?></th>
                    <td><?= $detalleventa->fimporteiva === null ? '' : $this->Number->format($detalleventa->fimporteiva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fsubtotalconiva') ?></th>
                    <td><?= $detalleventa->fsubtotalconiva === null ? '' : $this->Number->format($detalleventa->fsubtotalconiva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($detalleventa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($detalleventa->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
