<?php
use Cake\Routing\Router;
use Cake\I18n\Time;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta[]|\Cake\Collection\CollectionInterface $ventas
 */
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
    'AdminLTE./plugins/datatables/dataTables.bootstrap',
  ],
  ['block' => 'css']);

$this->Html->script([
    'AdminLTE./plugins/datatables/jquery.dataTables.min',
    'AdminLTE./plugins/datepicker/bootstrap-datepicker',
    'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $("#tblVentas").DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    });
  });
  $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });
</script>
<?php $this->end(); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <?php
                    echo $this->Form->button(
                        'Agregar', 
                        array(
                            'onclick' => "window.location.href='".Router::url(
                                array(
                                    'controller' => 'ventas',
                                    'action' => 'addventa')
                             )."'",
                            'class'=>'btn btn-block btn-primary btn-flat btn-add',                            
                            'style'=>'margin-right: 5px;margin-top: 0px;'                   
                        )
                    );
                    echo $this->Form->button(
                        'Detalle Ventas', 
                        array(
                            'onclick' => "window.location.href='".Router::url(
                                array(
                                    'controller' => 'ventas',
                                    'action' => 'listado')
                             )."'",
                            'class'=>'btn btn-block btn-primary btn-flat btn-add',         
                            'style'=>'margin-right: 5px;margin-top: 0px;'                   
                        )
                    );
                    echo $this->Form->button(
                        'Ventas diarias', 
                        array(
                            'onclick' => "window.location.href='".Router::url(
                                array(
                                    'controller' => 'ventas',
                                    'action' => 'ventasdiarias')
                             )."'",
                            'class'=>'btn btn-block btn-primary btn-flat btn-add',         
                            'style'=>'margin-right: 5px;margin-top: 0px;'                   
                        )
                    );
                    echo $this->Form->create($venta,[
                            'id' => "formListarVenta", 
                            'class'=>'form-control-horizontal',
                            ]) ?>
                    <fieldset>
                        <legend>
                            <?= __('Ventas desde el dia '.date('d-m-Y',strtotime($fechaVentasDesde))) ?> 
                            <?= __(' hasta el dia '.date('d-m-Y',strtotime($fechaVentasHasta))) ?> 
                            <?php if(count($micaja)>0){
                                ?>
                                <h3 class="box-title">Punto de Venta ::</h3> 
                                <?php echo str_pad($micaja['puntodeventa']['numero'], 5, "0", STR_PAD_LEFT); 
                            }
                            ?>
                        </legend>
                        <?php
                             echo $this->Form->control('fecha', [
                                    'label'=>'Fecha desde',
                                    'type'=>'text',
                                    'default'=>date('d-m-Y'),
                                    //'label' => false,
                                    'empty' => true,
                                    'class'=>'form-control pull-right datepicker',
                                    'templates' => [
                                        'inputContainer' => '
                                            <div class="input-group date">
                                                {{content}}
                                            </div>'
                                    ],
                                ]);
                              echo $this->Form->control('fechahasta', [
                                    'label'=>'Fecha hasta',
                                    'type'=>'text',
                                    'default'=>date('d-m-Y'),
                                    //'label' => false,
                                    'empty' => true,
                                    'class'=>'form-control pull-right datepicker',
                                    'templates' => [
                                        'inputContainer' => '
                                            <div class="input-group date">
                                                {{content}}
                                            </div>'
                                    ],
                                ]);
                        ?>
                      <?= $this->Form->button(__('ver otra fecha'),[
                        'style'=>'vertical-align: bottom;'
                      ]) ?>
                    </fieldset>
                  
                    <?= $this->Form->end() ?>    
                   
                </div>
                <!-- /.box-header -->
                <div class="ventas index content">
                    <div class="table-responsive" >
                        <table cellpadding="10" cellspacing="10" id="tblVentas">
                            <thead>
                                <tr>
                                    <th scope="col">Numero</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Creada</th>
                                    <th scope="col" style="min-width:120px">Cliente</th>
                                    <th scope="col">Punto de venta</th>
                                    <th scope="col">Neto</th>
                                    <th scope="col">Porcentaje descuento</th>
                                    <th scope="col">Importe descuento</th>
                                    <th scope="col">Total</th>
                                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ventas as $venta): ?>
                                <tr>
                                    <td><?= $this->Number->format($venta->numero) ?></td>                              
                                    <td>
                                        <span style="display:none"><?= $venta->created->i18nFormat('YYYY-MM-dd HH:mm') ?></span>
                                        <?= $venta->created->i18nFormat('dd-MM-yyyy') ?></td>
                                    <td><?= $venta->created->i18nFormat('HH:ss')?></td>
                                    <td><?= 
                                    !is_null($venta->cliente) ? 
                                    $this->Html->link($venta->cliente->nombre, 
                                    ['controller' => 'Clientes', 'action' => 'view', $venta->cliente->id]
                                    ) : '' ?></td>
                                    <td><?php 
                                        $numeroPDV = str_pad($venta->puntodeventa->numero, 5, "0", STR_PAD_LEFT);
                                        echo $this->Html->link( $numeroPDV, ['controller' => 'Puntodeventas', 'action' => 'view', $venta->puntodeventa->id]);
                                        ?></td>
                                    <td><?= $this->Number->format($venta->neto) ?></td>
                                    <td><?= $this->Number->format($venta->porcentajedescuento) ?></td>
                                    <td><?= $this->Number->format($venta->importedescuento) ?></td>
                                    <td><?= $this->Number->format($venta->total) ?></td>
                                    <td class="actions">
                                        <?php 
                                        $iconoPrint = '<i class="fa fa-print"></i>';
                                        echo $this->Html->link($iconoPrint, [
                                                'action' => 'view', $venta->id
                                            ],
                                            [
                                                'escape' => false,
                                            ]  
                                        ); 
                                        // if($AuthUserRole!='operador'){

                                        // $iconoTrash = '<i class="fa fa-trash"></i>';
                                        //     echo $this->Form->postLink(
                                        //         $iconoTrash,
                                        //             ['action' => 'delete', $venta->id,], 
                                        //             [
                                        //                 'confirm' => __('Esta seguro que desea eliminar la venta # {0}?', $venta->numero),
                                        //                 'escape' => false,
                                        //             ],                                                
                                        //             ['class' =>'btn btn-app-select',]
                                        //         );
                                        // }
                                        $iconoCloud = '<i class="fa fa-cloud-upload"></i>';
                                        if(is_null($venta->comprobantedesde)){
                                            echo $this->Html->link($iconoCloud, [
                                                    'action' => 'declararventa', $venta->id
                                                ],
                                                [
                                                    'escape' => false,
                                                ]  
                                            ); 
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->



<!-- <?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Venta> $ventas
 */
?>
<div class="ventas index content">
    <?= $this->Html->link(__('New Venta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ventas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('presupuesto') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('fnombre') ?></th>
                    <th><?= $this->Paginator->sort('fcuit') ?></th>
                    <th><?= $this->Paginator->sort('fdomicilio') ?></th>
                    <th><?= $this->Paginator->sort('comprobante_id') ?></th>
                    <th><?= $this->Paginator->sort('puntodeventa_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('neto') ?></th>
                    <th><?= $this->Paginator->sort('porcentajedescuento') ?></th>
                    <th><?= $this->Paginator->sort('importedescuento') ?></th>
                    <th><?= $this->Paginator->sort('iva') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('comprobantedesde') ?></th>
                    <th><?= $this->Paginator->sort('comprobantehasta') ?></th>
                    <th><?= $this->Paginator->sort('concepto') ?></th>
                    <th><?= $this->Paginator->sort('servdesde') ?></th>
                    <th><?= $this->Paginator->sort('servhasta') ?></th>
                    <th><?= $this->Paginator->sort('vtopago') ?></th>
                    <th><?= $this->Paginator->sort('condicioniva') ?></th>
                    <th><?= $this->Paginator->sort('imptributos') ?></th>
                    <th><?= $this->Paginator->sort('importeivaexento') ?></th>
                    <th><?= $this->Paginator->sort('importenetogravado') ?></th>
                    <th><?= $this->Paginator->sort('fneto') ?></th>
                    <th><?= $this->Paginator->sort('fporcentajedescuento') ?></th>
                    <th><?= $this->Paginator->sort('fimportedescuento') ?></th>
                    <th><?= $this->Paginator->sort('fiva') ?></th>
                    <th><?= $this->Paginator->sort('fimptributos') ?></th>
                    <th><?= $this->Paginator->sort('fimportenetoivaexento') ?></th>
                    <th><?= $this->Paginator->sort('fimportenetonogravado') ?></th>
                    <th><?= $this->Paginator->sort('ftotal') ?></th>
                    <th><?= $this->Paginator->sort('cobrado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                <tr>
                    <td><?= $this->Number->format($venta->id) ?></td>
                    <td><?= h($venta->presupuesto) ?></td>
                    <td><?= $venta->hasValue('cliente') ? $this->Html->link($venta->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venta->cliente->id]) : '' ?></td>
                    <td><?= h($venta->fnombre) ?></td>
                    <td><?= h($venta->fcuit) ?></td>
                    <td><?= h($venta->fdomicilio) ?></td>
                    <td><?= $venta->hasValue('comprobante') ? $this->Html->link($venta->comprobante->nombre, ['controller' => 'Comprobantes', 'action' => 'view', $venta->comprobante->id]) : '' ?></td>
                    <td><?= $venta->hasValue('puntodeventa') ? $this->Html->link($venta->puntodeventa->nombre, ['controller' => 'Puntodeventas', 'action' => 'view', $venta->puntodeventa->id]) : '' ?></td>
                    <td><?= $venta->hasValue('user') ? $this->Html->link($venta->user->username, ['controller' => 'Users', 'action' => 'view', $venta->user->id]) : '' ?></td>
                    <td><?= h($venta->numero) ?></td>
                    <td><?= h($venta->fecha) ?></td>
                    <td><?= $venta->neto === null ? '' : $this->Number->format($venta->neto) ?></td>
                    <td><?= $venta->porcentajedescuento === null ? '' : $this->Number->format($venta->porcentajedescuento) ?></td>
                    <td><?= $venta->importedescuento === null ? '' : $this->Number->format($venta->importedescuento) ?></td>
                    <td><?= $venta->iva === null ? '' : $this->Number->format($venta->iva) ?></td>
                    <td><?= $venta->total === null ? '' : $this->Number->format($venta->total) ?></td>
                    <td><?= h($venta->comprobantedesde) ?></td>
                    <td><?= h($venta->comprobantehasta) ?></td>
                    <td><?= h($venta->concepto) ?></td>
                    <td><?= h($venta->servdesde) ?></td>
                    <td><?= h($venta->servhasta) ?></td>
                    <td><?= h($venta->vtopago) ?></td>
                    <td><?= h($venta->condicioniva) ?></td>
                    <td><?= $venta->imptributos === null ? '' : $this->Number->format($venta->imptributos) ?></td>
                    <td><?= $venta->importeivaexento === null ? '' : $this->Number->format($venta->importeivaexento) ?></td>
                    <td><?= $venta->importenetogravado === null ? '' : $this->Number->format($venta->importenetogravado) ?></td>
                    <td><?= $venta->fneto === null ? '' : $this->Number->format($venta->fneto) ?></td>
                    <td><?= $venta->fporcentajedescuento === null ? '' : $this->Number->format($venta->fporcentajedescuento) ?></td>
                    <td><?= $venta->fimportedescuento === null ? '' : $this->Number->format($venta->fimportedescuento) ?></td>
                    <td><?= $venta->fiva === null ? '' : $this->Number->format($venta->fiva) ?></td>
                    <td><?= $venta->fimptributos === null ? '' : $this->Number->format($venta->fimptributos) ?></td>
                    <td><?= $venta->fimportenetoivaexento === null ? '' : $this->Number->format($venta->fimportenetoivaexento) ?></td>
                    <td><?= $venta->fimportenetonogravado === null ? '' : $this->Number->format($venta->fimportenetonogravado) ?></td>
                    <td><?= $venta->ftotal === null ? '' : $this->Number->format($venta->ftotal) ?></td>
                    <td><?= h($venta->cobrado) ?></td>
                    <td><?= h($venta->created) ?></td>
                    <td><?= h($venta->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venta->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venta->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?>
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
</div> -->
