<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsCategories Controller
 *
 * @property \App\Model\Table\ProductsCategoriesTable $ProductsCategories
 * @method \App\Model\Entity\ProductsCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productsCategories = $this->paginate($this->ProductsCategories);

        $this->set(compact('productsCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if (!$id)
            $id = 1;
        $productsCategory = $this->ProductsCategories->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productsCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsCategory = $this->ProductsCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsCategory = $this->ProductsCategories->patchEntity($productsCategory, $this->request->getData());
            if ($this->ProductsCategories->save($productsCategory)) {
                $this->Flash->success(__('The products category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products category could not be saved. Please, try again.'));
        }
        $this->set(compact('productsCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsCategory = $this->ProductsCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsCategory = $this->ProductsCategories->patchEntity($productsCategory, $this->request->getData());
            if ($this->ProductsCategories->save($productsCategory)) {
                $this->Flash->success(__('The products category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products category could not be saved. Please, try again.'));
        }
        $this->set(compact('productsCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsCategory = $this->ProductsCategories->get($id);
        if ($this->ProductsCategories->delete($productsCategory)) {
            $this->Flash->success(__('The products category has been deleted.'));
        } else {
            $this->Flash->error(__('The products category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
