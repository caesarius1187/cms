<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alicuotas Controller
 *
 * @property \App\Model\Table\AlicuotasTable $Alicuotas
 */
class AlicuotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Alicuotas->find()
            ->contain(['Ventas']);
        $alicuotas = $this->paginate($query);

        $this->set(compact('alicuotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Alicuota id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alicuota = $this->Alicuotas->get($id, contain: ['Ventas']);
        $this->set(compact('alicuota'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alicuota = $this->Alicuotas->newEmptyEntity();
        if ($this->request->is('post')) {
            $alicuota = $this->Alicuotas->patchEntity($alicuota, $this->request->getData());
            if ($this->Alicuotas->save($alicuota)) {
                $this->Flash->success(__('The alicuota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alicuota could not be saved. Please, try again.'));
        }
        $ventas = $this->Alicuotas->Ventas->find('list', limit: 200)->all();
        $this->set(compact('alicuota', 'ventas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alicuota id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alicuota = $this->Alicuotas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alicuota = $this->Alicuotas->patchEntity($alicuota, $this->request->getData());
            if ($this->Alicuotas->save($alicuota)) {
                $this->Flash->success(__('The alicuota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alicuota could not be saved. Please, try again.'));
        }
        $ventas = $this->Alicuotas->Ventas->find('list', limit: 200)->all();
        $this->set(compact('alicuota', 'ventas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alicuota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alicuota = $this->Alicuotas->get($id);
        if ($this->Alicuotas->delete($alicuota)) {
            $this->Flash->success(__('The alicuota has been deleted.'));
        } else {
            $this->Flash->error(__('The alicuota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
