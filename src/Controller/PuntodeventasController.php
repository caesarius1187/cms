<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Puntodeventas Controller
 *
 * @property \App\Model\Table\PuntodeventasTable $Puntodeventas
 */
class PuntodeventasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Puntodeventas->find();
        $puntodeventas = $this->paginate($query);

        $this->set(compact('puntodeventas'));
    }

    /**
     * View method
     *
     * @param string|null $id Puntodeventa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $puntodeventa = $this->Puntodeventas->get($id, contain: ['Users']);
        $this->set(compact('puntodeventa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $puntodeventa = $this->Puntodeventas->newEmptyEntity();
        if ($this->request->is('post')) {
            $puntodeventa = $this->Puntodeventas->patchEntity($puntodeventa, $this->request->getData());
            if ($this->Puntodeventas->save($puntodeventa)) {
                $this->Flash->success(__('The puntodeventa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntodeventa could not be saved. Please, try again.'));
        }
        $this->set(compact('puntodeventa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Puntodeventa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $puntodeventa = $this->Puntodeventas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $puntodeventa = $this->Puntodeventas->patchEntity($puntodeventa, $this->request->getData());
            if ($this->Puntodeventas->save($puntodeventa)) {
                $this->Flash->success(__('The puntodeventa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The puntodeventa could not be saved. Please, try again.'));
        }
        $this->set(compact('puntodeventa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Puntodeventa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $puntodeventa = $this->Puntodeventas->get($id);
        if ($this->Puntodeventas->delete($puntodeventa)) {
            $this->Flash->success(__('The puntodeventa has been deleted.'));
        } else {
            $this->Flash->error(__('The puntodeventa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
