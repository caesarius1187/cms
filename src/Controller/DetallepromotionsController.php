<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Detallepromotions Controller
 *
 * @property \App\Model\Table\DetallepromotionsTable $Detallepromotions
 */
class DetallepromotionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Detallepromotions->find()
            ->contain(['Promotions', 'Productos']);
        $detallepromotions = $this->paginate($query);

        $this->set(compact('detallepromotions'));
    }

    /**
     * View method
     *
     * @param string|null $id Detallepromotion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detallepromotion = $this->Detallepromotions->get($id, contain: ['Promotions', 'Productos']);
        $this->set(compact('detallepromotion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detallepromotion = $this->Detallepromotions->newEmptyEntity();
        if ($this->request->is('post')) {
            $detallepromotion = $this->Detallepromotions->patchEntity($detallepromotion, $this->request->getData());
            if ($this->Detallepromotions->save($detallepromotion)) {
                $this->Flash->success(__('The detallepromotion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detallepromotion could not be saved. Please, try again.'));
        }
        $promotions = $this->Detallepromotions->Promotions->find('list', limit: 200)->all();
        $productos = $this->Detallepromotions->Productos->find('list', limit: 200)->all();
        $this->set(compact('detallepromotion', 'promotions', 'productos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detallepromotion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detallepromotion = $this->Detallepromotions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallepromotion = $this->Detallepromotions->patchEntity($detallepromotion, $this->request->getData());
            if ($this->Detallepromotions->save($detallepromotion)) {
                $this->Flash->success(__('The detallepromotion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detallepromotion could not be saved. Please, try again.'));
        }
        $promotions = $this->Detallepromotions->Promotions->find('list', limit: 200)->all();
        $productos = $this->Detallepromotions->Productos->find('list', limit: 200)->all();
        $this->set(compact('detallepromotion', 'promotions', 'productos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detallepromotion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detallepromotion = $this->Detallepromotions->get($id);
        if ($this->Detallepromotions->delete($detallepromotion)) {
            $this->Flash->success(__('The detallepromotion has been deleted.'));
        } else {
            $this->Flash->error(__('The detallepromotion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
