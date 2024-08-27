<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rubros Controller
 *
 * @property \App\Model\Table\RubrosTable $Rubros
 */
class RubrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Rubros->find();
        $rubros = $this->paginate($query);

        $this->set(compact('rubros'));
    }

    /**
     * View method
     *
     * @param string|null $id Rubro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rubro = $this->Rubros->get($id, contain: ['Productos']);
        $this->set(compact('rubro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rubro = $this->Rubros->newEmptyEntity();
        if ($this->request->is('post')) {
            $rubro = $this->Rubros->patchEntity($rubro, $this->request->getData());
            if ($this->Rubros->save($rubro)) {
                $this->Flash->success(__('The rubro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rubro could not be saved. Please, try again.'));
        }
        $this->set(compact('rubro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rubro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rubro = $this->Rubros->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rubro = $this->Rubros->patchEntity($rubro, $this->request->getData());
            if ($this->Rubros->save($rubro)) {
                $this->Flash->success(__('The rubro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rubro could not be saved. Please, try again.'));
        }
        $this->set(compact('rubro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rubro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rubro = $this->Rubros->get($id);
        if ($this->Rubros->delete($rubro)) {
            $this->Flash->success(__('The rubro has been deleted.'));
        } else {
            $this->Flash->error(__('The rubro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
