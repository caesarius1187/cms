<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cajas Controller
 *
 * @property \App\Model\Table\CajasTable $Cajas
 */
class CajasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Cajas->find()
            ->contain(['Users', 'Puntodeventas']);
        $cajas = $this->paginate($query);

        $this->set(compact('cajas'));
    }

    /**
     * View method
     *
     * @param string|null $id Caja id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caja = $this->Cajas->get($id, contain: ['Users', 'Puntodeventas']);
        $this->set(compact('caja'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caja = $this->Cajas->newEmptyEntity();
        if ($this->request->is('post')) {
            $caja = $this->Cajas->patchEntity($caja, $this->request->getData());
            if ($this->Cajas->save($caja)) {
                $this->Flash->success(__('The caja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caja could not be saved. Please, try again.'));
        }
        $users = $this->Cajas->Users->find('list', limit: 200)->all();
        $puntodeventas = $this->Cajas->Puntodeventas->find('list', limit: 200)->all();
        $this->set(compact('caja', 'users', 'puntodeventas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Caja id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caja = $this->Cajas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caja = $this->Cajas->patchEntity($caja, $this->request->getData());
            if ($this->Cajas->save($caja)) {
                $this->Flash->success(__('The caja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caja could not be saved. Please, try again.'));
        }
        $users = $this->Cajas->Users->find('list', limit: 200)->all();
        $puntodeventas = $this->Cajas->Puntodeventas->find('list', limit: 200)->all();
        $this->set(compact('caja', 'users', 'puntodeventas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Caja id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caja = $this->Cajas->get($id);
        if ($this->Cajas->delete($caja)) {
            $this->Flash->success(__('The caja has been deleted.'));
        } else {
            $this->Flash->error(__('The caja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
