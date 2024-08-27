<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Extracciones Controller
 *
 * @property \App\Model\Table\ExtraccionesTable $Extracciones
 */
class ExtraccionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Extracciones->find()
            ->contain(['Puntodeventas', 'Users']);
        $extracciones = $this->paginate($query);

        $this->set(compact('extracciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Extraccione id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extraccione = $this->Extracciones->get($id, contain: ['Puntodeventas', 'Users']);
        $this->set(compact('extraccione'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extraccione = $this->Extracciones->newEmptyEntity();
        if ($this->request->is('post')) {
            $extraccione = $this->Extracciones->patchEntity($extraccione, $this->request->getData());
            if ($this->Extracciones->save($extraccione)) {
                $this->Flash->success(__('The extraccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extraccione could not be saved. Please, try again.'));
        }
        $puntodeventas = $this->Extracciones->Puntodeventas->find('list', limit: 200)->all();
        $users = $this->Extracciones->Users->find('list', limit: 200)->all();
        $this->set(compact('extraccione', 'puntodeventas', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Extraccione id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extraccione = $this->Extracciones->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extraccione = $this->Extracciones->patchEntity($extraccione, $this->request->getData());
            if ($this->Extracciones->save($extraccione)) {
                $this->Flash->success(__('The extraccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extraccione could not be saved. Please, try again.'));
        }
        $puntodeventas = $this->Extracciones->Puntodeventas->find('list', limit: 200)->all();
        $users = $this->Extracciones->Users->find('list', limit: 200)->all();
        $this->set(compact('extraccione', 'puntodeventas', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Extraccione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extraccione = $this->Extracciones->get($id);
        if ($this->Extracciones->delete($extraccione)) {
            $this->Flash->success(__('The extraccione has been deleted.'));
        } else {
            $this->Flash->error(__('The extraccione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
