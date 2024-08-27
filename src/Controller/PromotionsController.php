<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Promotions Controller
 *
 * @property \App\Model\Table\PromotionsTable $Promotions
 */
class PromotionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Promotions->find()
            ->contain(['Productos']);
        $promotions = $this->paginate($query);

        $this->set(compact('promotions'));
    }

    /**
     * View method
     *
     * @param string|null $id Promotion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $promotion = $this->Promotions->get($id, contain: ['Productos', 'Detallepromotions']);
        $this->set(compact('promotion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $promotion = $this->Promotions->newEmptyEntity();
        if ($this->request->is('post')) {
            $promotion = $this->Promotions->patchEntity($promotion, $this->request->getData());
            if ($this->Promotions->save($promotion)) {
                $this->Flash->success(__('The promotion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The promotion could not be saved. Please, try again.'));
        }
        $productos = $this->Promotions->Productos->find('list', limit: 200)->all();
        $this->set(compact('promotion', 'productos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Promotion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $promotion = $this->Promotions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $promotion = $this->Promotions->patchEntity($promotion, $this->request->getData());
            if ($this->Promotions->save($promotion)) {
                $this->Flash->success(__('The promotion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The promotion could not be saved. Please, try again.'));
        }
        $productos = $this->Promotions->Productos->find('list', limit: 200)->all();
        $this->set(compact('promotion', 'productos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Promotion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $promotion = $this->Promotions->get($id);
        if ($this->Promotions->delete($promotion)) {
            $this->Flash->success(__('The promotion has been deleted.'));
        } else {
            $this->Flash->error(__('The promotion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
