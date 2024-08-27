<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Compras Controller
 *
 * @property \App\Model\Table\ComprasTable $Compras
 */
class ComprasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Compras->find()
            ->contain(['Users', 'Puntodeventas', 'Clientes', 'Comprobantes']);
        $compras = $this->paginate($query);

        $this->set(compact('compras'));
    }

    /**
     * View method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compra = $this->Compras->get($id, contain: ['Users', 'Puntodeventas', 'Clientes', 'Comprobantes', 'Detallecompras', 'Pagos']);
        $this->set(compact('compra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compra = $this->Compras->newEmptyEntity();
        if ($this->request->is('post')) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }
        $users = $this->Compras->Users->find('list', limit: 200)->all();
        $puntodeventas = $this->Compras->Puntodeventas->find('list', limit: 200)->all();
        $clientes = $this->Compras->Clientes->find('list', limit: 200)->all();
        $comprobantes = $this->Compras->Comprobantes->find('list', limit: 200)->all();
        $this->set(compact('compra', 'users', 'puntodeventas', 'clientes', 'comprobantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compra = $this->Compras->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            if ($this->Compras->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }
        $users = $this->Compras->Users->find('list', limit: 200)->all();
        $puntodeventas = $this->Compras->Puntodeventas->find('list', limit: 200)->all();
        $clientes = $this->Compras->Clientes->find('list', limit: 200)->all();
        $comprobantes = $this->Compras->Comprobantes->find('list', limit: 200)->all();
        $this->set(compact('compra', 'users', 'puntodeventas', 'clientes', 'comprobantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compra = $this->Compras->get($id);
        if ($this->Compras->delete($compra)) {
            $this->Flash->success(__('The compra has been deleted.'));
        } else {
            $this->Flash->error(__('The compra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
