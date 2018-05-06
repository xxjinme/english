<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HoaDons Controller
 *
 *
 * @method \App\Model\Entity\HoaDon[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HoaDonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hoaDons = $this->paginate($this->HoaDons);

        $this->set(compact('hoaDons'));
    }

    /**
     * View method
     *
     * @param string|null $id Hoa Don id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hoaDon = $this->HoaDons->get($id, [
            'contain' => []
        ]);

        $this->set('hoaDon', $hoaDon);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hoaDon = $this->HoaDons->newEntity();
        if ($this->request->is('post')) {
            $hoaDon = $this->HoaDons->patchEntity($hoaDon, $this->request->getData());
            if ($this->HoaDons->save($hoaDon)) {
                $this->Flash->success(__('The hoa don has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoa don could not be saved. Please, try again.'));
        }
        $this->set(compact('hoaDon'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoa Don id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hoaDon = $this->HoaDons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hoaDon = $this->HoaDons->patchEntity($hoaDon, $this->request->getData());
            if ($this->HoaDons->save($hoaDon)) {
                $this->Flash->success(__('The hoa don has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoa don could not be saved. Please, try again.'));
        }
        $this->set(compact('hoaDon'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoa Don id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hoaDon = $this->HoaDons->get($id);
        if ($this->HoaDons->delete($hoaDon)) {
            $this->Flash->success(__('The hoa don has been deleted.'));
        } else {
            $this->Flash->error(__('The hoa don could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
