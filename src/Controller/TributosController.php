<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tributos Controller
 *
 * @property \App\Model\Table\TributosTable $Tributos
 */
class TributosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Tributos->find()
            ->contain(['Ventas']);
        $tributos = $this->paginate($query);

        $this->set(compact('tributos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tributo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tributo = $this->Tributos->get($id, contain: ['Ventas']);
        $this->set(compact('tributo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tributo = $this->Tributos->newEmptyEntity();
        if ($this->request->is('post')) {
            $tributo = $this->Tributos->patchEntity($tributo, $this->request->getData());
            if ($this->Tributos->save($tributo)) {
                $this->Flash->success(__('The tributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tributo could not be saved. Please, try again.'));
        }
        $ventas = $this->Tributos->Ventas->find('list', limit: 200)->all();
        $this->set(compact('tributo', 'ventas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tributo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tributo = $this->Tributos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tributo = $this->Tributos->patchEntity($tributo, $this->request->getData());
            if ($this->Tributos->save($tributo)) {
                $this->Flash->success(__('The tributo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tributo could not be saved. Please, try again.'));
        }
        $ventas = $this->Tributos->Ventas->find('list', limit: 200)->all();
        $this->set(compact('tributo', 'ventas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tributo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tributo = $this->Tributos->get($id);
        if ($this->Tributos->delete($tributo)) {
            $this->Flash->success(__('The tributo has been deleted.'));
        } else {
            $this->Flash->error(__('The tributo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
