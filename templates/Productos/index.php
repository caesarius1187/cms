<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Producto> $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('rubro_id') ?></th>
                    <th><?= $this->Paginator->sort('promocion') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('costo') ?></th>
                    <th><?= $this->Paginator->sort('ganancia') ?></th>
                    <th><?= $this->Paginator->sort('gananciapack') ?></th>
                    <th><?= $this->Paginator->sort('ganancia1') ?></th>
                    <th><?= $this->Paginator->sort('ganancia2') ?></th>
                    <th><?= $this->Paginator->sort('ganancia3') ?></th>
                    <th><?= $this->Paginator->sort('ganancia4') ?></th>
                    <th><?= $this->Paginator->sort('preciopack') ?></th>
                    <th><?= $this->Paginator->sort('preciomayor1') ?></th>
                    <th><?= $this->Paginator->sort('preciomayor2') ?></th>
                    <th><?= $this->Paginator->sort('preciomayor3') ?></th>
                    <th><?= $this->Paginator->sort('preciomayor4') ?></th>
                    <th><?= $this->Paginator->sort('preciopack4') ?></th>
                    <th><?= $this->Paginator->sort('preciopack3') ?></th>
                    <th><?= $this->Paginator->sort('preciopack2') ?></th>
                    <th><?= $this->Paginator->sort('preciopack1') ?></th>
                    <th><?= $this->Paginator->sort('preciopack0') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('codigopack') ?></th>
                    <th><?= $this->Paginator->sort('cantpack') ?></th>
                    <th><?= $this->Paginator->sort('stockminimo') ?></th>
                    <th><?= $this->Paginator->sort('stock') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= $producto->hasValue('rubro') ? $this->Html->link($producto->rubro->id, ['controller' => 'Rubros', 'action' => 'view', $producto->rubro->id]) : '' ?></td>
                    <td><?= h($producto->promocion) ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= $producto->precio === null ? '' : $this->Number->format($producto->precio) ?></td>
                    <td><?= $producto->costo === null ? '' : $this->Number->format($producto->costo) ?></td>
                    <td><?= $producto->ganancia === null ? '' : $this->Number->format($producto->ganancia) ?></td>
                    <td><?= $producto->gananciapack === null ? '' : $this->Number->format($producto->gananciapack) ?></td>
                    <td><?= $producto->ganancia1 === null ? '' : $this->Number->format($producto->ganancia1) ?></td>
                    <td><?= $producto->ganancia2 === null ? '' : $this->Number->format($producto->ganancia2) ?></td>
                    <td><?= $producto->ganancia3 === null ? '' : $this->Number->format($producto->ganancia3) ?></td>
                    <td><?= $producto->ganancia4 === null ? '' : $this->Number->format($producto->ganancia4) ?></td>
                    <td><?= $producto->preciopack === null ? '' : $this->Number->format($producto->preciopack) ?></td>
                    <td><?= $producto->preciomayor1 === null ? '' : $this->Number->format($producto->preciomayor1) ?></td>
                    <td><?= $producto->preciomayor2 === null ? '' : $this->Number->format($producto->preciomayor2) ?></td>
                    <td><?= $producto->preciomayor3 === null ? '' : $this->Number->format($producto->preciomayor3) ?></td>
                    <td><?= $producto->preciomayor4 === null ? '' : $this->Number->format($producto->preciomayor4) ?></td>
                    <td><?= $this->Number->format($producto->preciopack4) ?></td>
                    <td><?= $this->Number->format($producto->preciopack3) ?></td>
                    <td><?= $this->Number->format($producto->preciopack2) ?></td>
                    <td><?= $this->Number->format($producto->preciopack1) ?></td>
                    <td><?= $this->Number->format($producto->preciopack0) ?></td>
                    <td><?= h($producto->codigo) ?></td>
                    <td><?= h($producto->codigopack) ?></td>
                    <td><?= $producto->cantpack === null ? '' : $this->Number->format($producto->cantpack) ?></td>
                    <td><?= $producto->stockminimo === null ? '' : $this->Number->format($producto->stockminimo) ?></td>
                    <td><?= $producto->stock === null ? '' : $this->Number->format($producto->stock) ?></td>
                    <td><?= h($producto->created) ?></td>
                    <td><?= h($producto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
