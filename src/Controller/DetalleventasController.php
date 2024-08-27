<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Detalleventas Controller
 *
 * @property \App\Model\Table\DetalleventasTable $Detalleventas
 */
class DetalleventasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Detalleventas->find()
            ->contain(['Productos', 'Ventas']);
        $detalleventas = $this->paginate($query);

        $this->set(compact('detalleventas'));
    }

    /**
     * View method
     *
     * @param string|null $id Detalleventa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detalleventa = $this->Detalleventas->get($id, contain: ['Productos', 'Ventas']);
        $this->set(compact('detalleventa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detalleventa = $this->Detalleventas->newEmptyEntity();
        if ($this->request->is('post')) {
            $detalleventa = $this->Detalleventas->patchEntity($detalleventa, $this->request->getData());
            if ($this->Detalleventas->save($detalleventa)) {
                $this->Flash->success(__('The detalleventa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalleventa could not be saved. Please, try again.'));
        }
        $productos = $this->Detalleventas->Productos->find('list', limit: 200)->all();
        $ventas = $this->Detalleventas->Ventas->find('list', limit: 200)->all();
        $this->set(compact('detalleventa', 'productos', 'ventas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalleventa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detalleventa = $this->Detalleventas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detalleventa = $this->Detalleventas->patchEntity($detalleventa, $this->request->getData());
            if ($this->Detalleventas->save($detalleventa)) {
                $this->Flash->success(__('The detalleventa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalleventa could not be saved. Please, try again.'));
        }
        $productos = $this->Detalleventas->Productos->find('list', limit: 200)->all();
        $ventas = $this->Detalleventas->Ventas->find('list', limit: 200)->all();
        $this->set(compact('detalleventa', 'productos', 'ventas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalleventa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detalleventa = $this->Detalleventas->get($id);
        if ($this->Detalleventas->delete($detalleventa)) {
            $this->Flash->success(__('The detalleventa has been deleted.'));
        } else {
            $this->Flash->error(__('The detalleventa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
