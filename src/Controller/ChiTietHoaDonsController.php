<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChiTietHoaDons Controller
 *
 *
 * @method \App\Model\Entity\ChiTietHoaDon[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChiTietHoaDonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $chiTietHoaDons = $this->paginate($this->ChiTietHoaDons);

        $this->set(compact('chiTietHoaDons'));
    }

    /**
     * View method
     *
     * @param string|null $id Chi Tiet Hoa Don id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chiTietHoaDon = $this->ChiTietHoaDons->get($id, [
            'contain' => []
        ]);

        $this->set('chiTietHoaDon', $chiTietHoaDon);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chiTietHoaDon = $this->ChiTietHoaDons->newEntity();
        if ($this->request->is('post')) {
            $chiTietHoaDon = $this->ChiTietHoaDons->patchEntity($chiTietHoaDon, $this->request->getData());
            if ($this->ChiTietHoaDons->save($chiTietHoaDon)) {
                $this->Flash->success(__('The chi tiet hoa don has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chi tiet hoa don could not be saved. Please, try again.'));
        }
        $this->set(compact('chiTietHoaDon'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chi Tiet Hoa Don id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chiTietHoaDon = $this->ChiTietHoaDons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chiTietHoaDon = $this->ChiTietHoaDons->patchEntity($chiTietHoaDon, $this->request->getData());
            if ($this->ChiTietHoaDons->save($chiTietHoaDon)) {
                $this->Flash->success(__('The chi tiet hoa don has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chi tiet hoa don could not be saved. Please, try again.'));
        }
        $this->set(compact('chiTietHoaDon'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chi Tiet Hoa Don id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chiTietHoaDon = $this->ChiTietHoaDons->get($id);
        if ($this->ChiTietHoaDons->delete($chiTietHoaDon)) {
            $this->Flash->success(__('The chi tiet hoa don has been deleted.'));
        } else {
            $this->Flash->error(__('The chi tiet hoa don could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
