<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Camposopcionales Controller
 *
 * @property \App\Model\Table\CamposopcionalesTable $Camposopcionales
 */
class CamposopcionalesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Camposopcionales->find();
        $camposopcionales = $this->paginate($query);

        $this->set(compact('camposopcionales'));
    }

    /**
     * View method
     *
     * @param string|null $id Camposopcionale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $camposopcionale = $this->Camposopcionales->get($id, contain: []);
        $this->set(compact('camposopcionale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $camposopcionale = $this->Camposopcionales->newEmptyEntity();
        if ($this->request->is('post')) {
            $camposopcionale = $this->Camposopcionales->patchEntity($camposopcionale, $this->request->getData());
            if ($this->Camposopcionales->save($camposopcionale)) {
                $this->Flash->success(__('The camposopcionale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The camposopcionale could not be saved. Please, try again.'));
        }
        $this->set(compact('camposopcionale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Camposopcionale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $camposopcionale = $this->Camposopcionales->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $camposopcionale = $this->Camposopcionales->patchEntity($camposopcionale, $this->request->getData());
            if ($this->Camposopcionales->save($camposopcionale)) {
                $this->Flash->success(__('The camposopcionale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The camposopcionale could not be saved. Please, try again.'));
        }
        $this->set(compact('camposopcionale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Camposopcionale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $camposopcionale = $this->Camposopcionales->get($id);
        if ($this->Camposopcionales->delete($camposopcionale)) {
            $this->Flash->success(__('The camposopcionale has been deleted.'));
        } else {
            $this->Flash->error(__('The camposopcionale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
