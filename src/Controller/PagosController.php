<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pagos Controller
 *
 * @property \App\Model\Table\PagosTable $Pagos
 */
class PagosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pagos->find()
            ->contain(['Clientes', 'Puntodeventas', 'Compras', 'Ventas', 'Users']);
        $pagos = $this->paginate($query);

        $this->set(compact('pagos'));
    }

    /**
     * View method
     *
     * @param string|null $id Pago id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pago = $this->Pagos->get($id, contain: ['Clientes', 'Puntodeventas', 'Compras', 'Ventas', 'Users']);
        $this->set(compact('pago'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pago = $this->Pagos->newEmptyEntity();
        if ($this->request->is('post')) {
            $pago = $this->Pagos->patchEntity($pago, $this->request->getData());
            if ($this->Pagos->save($pago)) {
                $this->Flash->success(__('The pago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pago could not be saved. Please, try again.'));
        }
        $clientes = $this->Pagos->Clientes->find('list', limit: 200)->all();
        $puntodeventas = $this->Pagos->Puntodeventas->find('list', limit: 200)->all();
        $compras = $this->Pagos->Compras->find('list', limit: 200)->all();
        $ventas = $this->Pagos->Ventas->find('list', limit: 200)->all();
        $users = $this->Pagos->Users->find('list', limit: 200)->all();
        $this->set(compact('pago', 'clientes', 'puntodeventas', 'compras', 'ventas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pago id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pago = $this->Pagos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pago = $this->Pagos->patchEntity($pago, $this->request->getData());
            if ($this->Pagos->save($pago)) {
                $this->Flash->success(__('The pago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pago could not be saved. Please, try again.'));
        }
        $clientes = $this->Pagos->Clientes->find('list', limit: 200)->all();
        $puntodeventas = $this->Pagos->Puntodeventas->find('list', limit: 200)->all();
        $compras = $this->Pagos->Compras->find('list', limit: 200)->all();
        $ventas = $this->Pagos->Ventas->find('list', limit: 200)->all();
        $users = $this->Pagos->Users->find('list', limit: 200)->all();
        $this->set(compact('pago', 'clientes', 'puntodeventas', 'compras', 'ventas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pago id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pago = $this->Pagos->get($id);
        if ($this->Pagos->delete($pago)) {
            $this->Flash->success(__('The pago has been deleted.'));
        } else {
            $this->Flash->error(__('The pago could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
