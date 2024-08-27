<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rubro $rubro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rubro'), ['action' => 'edit', $rubro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rubro'), ['action' => 'delete', $rubro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rubro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rubros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rubro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rubros view content">
            <h3><?= h($rubro->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($rubro->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($rubro->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rubro->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($rubro->productos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Rubro Id') ?></th>
                            <th><?= __('Promocion') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th><?= __('Costo') ?></th>
                            <th><?= __('Ganancia') ?></th>
                            <th><?= __('Gananciapack') ?></th>
                            <th><?= __('Ganancia1') ?></th>
                            <th><?= __('Ganancia2') ?></th>
                            <th><?= __('Ganancia3') ?></th>
                            <th><?= __('Ganancia4') ?></th>
                            <th><?= __('Preciopack') ?></th>
                            <th><?= __('Preciomayor1') ?></th>
                            <th><?= __('Preciomayor2') ?></th>
                            <th><?= __('Preciomayor3') ?></th>
                            <th><?= __('Preciomayor4') ?></th>
                            <th><?= __('Preciopack4') ?></th>
                            <th><?= __('Preciopack3') ?></th>
                            <th><?= __('Preciopack2') ?></th>
                            <th><?= __('Preciopack1') ?></th>
                            <th><?= __('Preciopack0') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Codigopack') ?></th>
                            <th><?= __('Cantpack') ?></th>
                            <th><?= __('Stockminimo') ?></th>
                            <th><?= __('Stock') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rubro->productos as $producto) : ?>
                        <tr>
                            <td><?= h($producto->id) ?></td>
                            <td><?= h($producto->rubro_id) ?></td>
                            <td><?= h($producto->promocion) ?></td>
                            <td><?= h($producto->nombre) ?></td>
                            <td><?= h($producto->precio) ?></td>
                            <td><?= h($producto->costo) ?></td>
                            <td><?= h($producto->ganancia) ?></td>
                            <td><?= h($producto->gananciapack) ?></td>
                            <td><?= h($producto->ganancia1) ?></td>
                            <td><?= h($producto->ganancia2) ?></td>
                            <td><?= h($producto->ganancia3) ?></td>
                            <td><?= h($producto->ganancia4) ?></td>
                            <td><?= h($producto->preciopack) ?></td>
                            <td><?= h($producto->preciomayor1) ?></td>
                            <td><?= h($producto->preciomayor2) ?></td>
                            <td><?= h($producto->preciomayor3) ?></td>
                            <td><?= h($producto->preciomayor4) ?></td>
                            <td><?= h($producto->preciopack4) ?></td>
                            <td><?= h($producto->preciopack3) ?></td>
                            <td><?= h($producto->preciopack2) ?></td>
                            <td><?= h($producto->preciopack1) ?></td>
                            <td><?= h($producto->preciopack0) ?></td>
                            <td><?= h($producto->codigo) ?></td>
                            <td><?= h($producto->codigopack) ?></td>
                            <td><?= h($producto->cantpack) ?></td>
                            <td><?= h($producto->stockminimo) ?></td>
                            <td><?= h($producto->stock) ?></td>
                            <td><?= h($producto->created) ?></td>
                            <td><?= h($producto->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $producto->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $producto->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
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
