<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Appoint Controller
 *
 * @method \App\Model\Entity\Appoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppointController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $key = $this->request->getQuery('key');
        if (!$key) {
            // $query = $this->Appoint->find('all')->where(['Or' => ['email like'=>'%'.$key.'%','phone like'=>'%'.$key.'%']]);
            $query = $this->Appoint->find('all')->where(['id like'=>'%'.$key.'%']);
        // $query = $this->Image->findAllByEmailOrPhone($key);
        } else {
            $query = $this->Appoint;
        }

        $appoint = $this->paginate($query);

        $this->set(compact('appoint'));
        // echo json_encode($appoint);
        // exit();
    }

    /**
     * View method
     *
     * @param string|null $id Appoint id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appoint = $this->Appoint->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('appoint'));
        // echo json_encode($appoint);
        // exit();
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appoint = $this->Appoint->newEmptyEntity();
        if ($this->request->is('post')) {
            $appoint = $this->Appoint->patchEntity($appoint, $this->request->getData());
            if ($this->Appoint->save($appoint)) {
                $this->Flash->success(__('The appoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoint could not be saved. Please, try again.'));
        }
        $this->set(compact('appoint'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appoint id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appoint = $this->Appoint->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appoint = $this->Appoint->patchEntity($appoint, $this->request->getData());
            if ($this->Appoint->save($appoint)) {
                $this->Flash->success(__('The appoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoint could not be saved. Please, try again.'));
        }
        $this->set(compact('appoint'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appoint id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appoint = $this->Appoint->get($id);
        if ($this->Appoint->delete($appoint)) {
            $this->Flash->success(__('The appoint has been deleted.'));
        } else {
            $this->Flash->error(__('The appoint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
