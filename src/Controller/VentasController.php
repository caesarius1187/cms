<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ventas Controller
 *
 * @property \App\Model\Table\VentasTable $Ventas
 */
class VentasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public $AFIPIsProduction = true; //Produccion
    public $condicionesiva = [
      1 => 'IVA Responsable Inscripto',
      4 => 'IVA Sujeto Exento',
      5 => 'Consumidor Final',
      6 => 'Responsable Monotributo',
      8 => 'Proveedor del Exterior',
      9 => 'Cliente del Exterior',
      10 => 'IVA Liberado - Ley Nº 19.640',
      11 => 'IVA Responsable Inscripto - Agente de Percepción',
      13 => 'Monotributista Social',
      15 => 'IVA No Alcanzado',
    ];
    public function index()
    {
        // $query = $this->Ventas->find()
        //     ->contain(['Clientes', 'Comprobantes', 'Puntodeventas', 'Users']);
        // $ventas = $this->paginate($query);

        // $this->set(compact('ventas'));
        

        //$session = $this->request->getSession(); // less than 3.5
        //$empresaId = $session->read('Auth.User')['empresa_id'];
      
        $fechaVentasDesde = date('d-m-Y');
        $fechaVentasHasta = date('d-m-Y');
        if ($this->request->is('post')) {
                $fechaVentasDesde = $this->request->getData()['fecha'];
                $fechaVentasHasta = $this->request->getData()['fechahasta'];
        }
        $fechaconsultadesde = date('Y-m-d',strtotime($fechaVentasDesde));
        $fechaconsultahasta = date('Y-m-d',strtotime($fechaVentasHasta));
        $micaja = [];
        $cajaAbierta = false;
        // if(!empty($this->viewVars['cajasabiertas'])){
        //     foreach ($this->viewVars['cajasabiertas'] as $kc => $caja) {
        //       $micaja = $caja;
        //       $cajaAbierta = true;
        //     }
        // }
        $conditions = [];
        if($cajaAbierta){
          $conditions = [
              'contain' => ['Clientes', 'Puntodeventas'],
              'conditions'=>[
                //   'Ventas.created <= "'.$fechaconsultahasta.' 23:59:59"',
                //   'Ventas.created >= "'.$fechaconsultadesde.' 00:00:00"',
                //   'Ventas.puntodeventa_id' => $micaja['puntodeventa_id'],
                  //'Ventas.empresa_id' => $empresaId,
              ]
          ];
        }else{
          $conditions = [
              'contain' => ['Clientes', 'Puntodeventas'],
              'conditions'=>[
                //   'Ventas.created <= "'.$fechaconsultahasta.' 23:59:59"',
                //   'Ventas.created >= "'.$fechaconsultadesde.' 00:00:00"',
                //   'Ventas.empresa_id' => $empresaId,
              ]
          ];
        }
        // if($this->viewVars['userfiscal']){
        //   $conditions['conditions'][] = 'Ventas.comprobantedesde IS NOT NULL';
        // }
        
        $qventas = $this->Ventas->find('all',$conditions);
        
        $ventas = $this->paginate($qventas);

        $venta = $this->Ventas->newEmptyEntity();

        //$AuthUserRole = $session->read('Auth.User')['role'];
        $this->set(compact('fechaVentasDesde','fechaVentasHasta','venta','ventas','micaja'/*,'AuthUserRole'*/));
    }

    /**
     * View method
     *
     * @param string|null $id Venta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venta = $this->Ventas->get($id, contain: ['Clientes', 'Comprobantes', 'Puntodeventas', 'Users', 'Alicuotas', 'Detalleventas', 'Pagos', 'Tributos']);
        $this->set(compact('venta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venta = $this->Ventas->newEmptyEntity();
        if ($this->request->is('post')) {
            $venta = $this->Ventas->patchEntity($venta, $this->request->getData());
            if ($this->Ventas->save($venta)) {
                $this->Flash->success(__('The venta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venta could not be saved. Please, try again.'));
        }
        $clientes = $this->Ventas->Clientes->find('list', limit: 200)->all();
        $comprobantes = $this->Ventas->Comprobantes->find('list', limit: 200)->all();
        $puntodeventas = $this->Ventas->Puntodeventas->find('list', limit: 200)->all();
        $users = $this->Ventas->Users->find('list', limit: 200)->all();
        $this->set(compact('venta', 'clientes', 'comprobantes', 'puntodeventas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venta = $this->Ventas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venta = $this->Ventas->patchEntity($venta, $this->request->getData());
            if ($this->Ventas->save($venta)) {
                $this->Flash->success(__('The venta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venta could not be saved. Please, try again.'));
        }
        $clientes = $this->Ventas->Clientes->find('list', limit: 200)->all();
        $comprobantes = $this->Ventas->Comprobantes->find('list', limit: 200)->all();
        $puntodeventas = $this->Ventas->Puntodeventas->find('list', limit: 200)->all();
        $users = $this->Ventas->Users->find('list', limit: 200)->all();
        $this->set(compact('venta', 'clientes', 'comprobantes', 'puntodeventas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venta = $this->Ventas->get($id);
        if ($this->Ventas->delete($venta)) {
            $this->Flash->success(__('The venta has been deleted.'));
        } else {
            $this->Flash->error(__('The venta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
