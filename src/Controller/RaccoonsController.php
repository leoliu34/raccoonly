<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Raccoons Controller
 *
 * @property \App\Model\Table\RaccoonsTable $Raccoons
 */
class RaccoonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $raccoons = $this->paginate($this->Raccoons);

        $this->set(compact('raccoons'));
        $this->set('_serialize', ['raccoons']);
    }

    /**
     * View method
     *
     * @param string|null $id Raccoon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $raccoon = $this->Raccoons->get($id, [
            'contain' => ['Cities', 'Tags']
        ]);

        $this->set('raccoon', $raccoon);
        $this->set('_serialize', ['raccoon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $raccoon = $this->Raccoons->newEntity();
        if ($this->request->is('post')) {
            $raccoon = $this->Raccoons->patchEntity($raccoon, $this->request->data);
            if ($this->Raccoons->save($raccoon)) {
                $this->Flash->success(__('The raccoon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The raccoon could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Raccoons->Cities->find('list', ['limit' => 200, 'fields' => ['id', 'name', 'wait' => 'sleep(4)']]);
        $tags = $this->Raccoons->Tags->find('list', ['limit' => 200, 'fields' => ['Id', 'name']]);
        $this->set(compact('raccoon', 'cities', 'tags'));
        $this->set('_serialize', ['raccoon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Raccoon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $raccoon = $this->Raccoons->get($id, [
            'contain' => ['Cities', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $raccoon = $this->Raccoons->patchEntity($raccoon, $this->request->data);
            if ($this->Raccoons->save($raccoon)) {
                $this->Flash->success(__('The raccoon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The raccoon could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Raccoons->Cities->find('list', ['limit' => 200]);
        $tags = $this->Raccoons->Tags->find('list', ['limit' => 200]);
        $this->set(compact('raccoon', 'cities', 'tags'));
        $this->set('_serialize', ['raccoon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Raccoon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $raccoon = $this->Raccoons->get($id);
        if ($this->Raccoons->delete($raccoon)) {
            $this->Flash->success(__('The raccoon has been deleted.'));
        } else {
            $this->Flash->error(__('The raccoon could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function about() {
        $this->set('useBootstrap', true);
        $this->set('hideNavigation', true);
    }
}
