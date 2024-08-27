<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="productos view content">
            <h3><?= h($producto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rubro') ?></th>
                    <td><?= $producto->hasValue('rubro') ? $this->Html->link($producto->rubro->id, ['controller' => 'Rubros', 'action' => 'view', $producto->rubro->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($producto->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigopack') ?></th>
                    <td><?= h($producto->codigopack) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($producto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $producto->precio === null ? '' : $this->Number->format($producto->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= $producto->costo === null ? '' : $this->Number->format($producto->costo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia') ?></th>
                    <td><?= $producto->ganancia === null ? '' : $this->Number->format($producto->ganancia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gananciapack') ?></th>
                    <td><?= $producto->gananciapack === null ? '' : $this->Number->format($producto->gananciapack) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia1') ?></th>
                    <td><?= $producto->ganancia1 === null ? '' : $this->Number->format($producto->ganancia1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia2') ?></th>
                    <td><?= $producto->ganancia2 === null ? '' : $this->Number->format($producto->ganancia2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia3') ?></th>
                    <td><?= $producto->ganancia3 === null ? '' : $this->Number->format($producto->ganancia3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ganancia4') ?></th>
                    <td><?= $producto->ganancia4 === null ? '' : $this->Number->format($producto->ganancia4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciopack') ?></th>
                    <td><?= $producto->preciopack === null ? '' : $this->Number->format($producto->preciopack) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciomayor1') ?></th>
                    <td><?= $producto->preciomayor1 === null ? '' : $this->Number->format($producto->preciomayor1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciomayor2') ?></th>
                    <td><?= $producto->preciomayor2 === null ? '' : $this->Number->format($producto->preciomayor2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciomayor3') ?></th>
                    <td><?= $producto->preciomayor3 === null ? '' : $this->Number->format($producto->preciomayor3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciomayor4') ?></th>
                    <td><?= $producto->preciomayor4 === null ? '' : $this->Number->format($producto->preciomayor4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciopack4') ?></th>
                    <td><?= $this->Number->format($producto->preciopack4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciopack3') ?></th>
                    <td><?= $this->Number->format($producto->preciopack3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciopack2') ?></th>
                    <td><?= $this->Number->format($producto->preciopack2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciopack1') ?></th>
                    <td><?= $this->Number->format($producto->preciopack1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preciopack0') ?></th>
                    <td><?= $this->Number->format($producto->preciopack0) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantpack') ?></th>
                    <td><?= $producto->cantpack === null ? '' : $this->Number->format($producto->cantpack) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stockminimo') ?></th>
                    <td><?= $producto->stockminimo === null ? '' : $this->Number->format($producto->stockminimo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stock') ?></th>
                    <td><?= $producto->stock === null ? '' : $this->Number->format($producto->stock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($producto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($producto->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Promocion') ?></th>
                    <td><?= $producto->promocion ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Detallecompras') ?></h4>
                <?php if (!empty($producto->detallecompras)) : ?>
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
                        <?php foreach ($producto->detallecompras as $detallecompra) : ?>
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
                <h4><?= __('Related Detallepromotions') ?></h4>
                <?php if (!empty($producto->detallepromotions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Promotion Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Ganancia') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($producto->detallepromotions as $detallepromotion) : ?>
                        <tr>
                            <td><?= h($detallepromotion->id) ?></td>
                            <td><?= h($detallepromotion->promotion_id) ?></td>
                            <td><?= h($detallepromotion->producto_id) ?></td>
                            <td><?= h($detallepromotion->ganancia) ?></td>
                            <td><?= h($detallepromotion->precio) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Detallepromotions', 'action' => 'view', $detallepromotion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Detallepromotions', 'action' => 'edit', $detallepromotion->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Detallepromotions', 'action' => 'delete', $detallepromotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallepromotion->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Detalleventas') ?></h4>
                <?php if (!empty($producto->detalleventas)) : ?>
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
                        <?php foreach ($producto->detalleventas as $detalleventa) : ?>
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
                <h4><?= __('Related Promotions') ?></h4>
                <?php if (!empty($producto->promotions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Producto Id') ?></th>
                            <th><?= __('Productopromocion Id') ?></th>
                            <th><?= __('Costo') ?></th>
                            <th><?= __('Ganancia') ?></th>
                            <th><?= __('Precio') ?></th>
                            <th><?= __('Cantidad') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($producto->promotions as $promotion) : ?>
                        <tr>
                            <td><?= h($promotion->id) ?></td>
                            <td><?= h($promotion->producto_id) ?></td>
                            <td><?= h($promotion->productopromocion_id) ?></td>
                            <td><?= h($promotion->costo) ?></td>
                            <td><?= h($promotion->ganancia) ?></td>
                            <td><?= h($promotion->precio) ?></td>
                            <td><?= h($promotion->cantidad) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Promotions', 'action' => 'view', $promotion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Promotions', 'action' => 'edit', $promotion->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Promotions', 'action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?>
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
