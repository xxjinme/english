<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

/**
 * Carts Controller
 *
 *
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(); // allow all action for customer
        parent::beforeFilter($event);
    }
    public function add() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $this->Carts->addKhoaHoc($this->request->data['khoaHoc_id']);
        }
        echo $this->Carts->getCount();
        return $this->redirect(['controller'=>'khoaHocs', 'action' => 'index']);
    }
    public function view() {
        $this->loadModel('Courses');
        $carts = $this->Carts->readKhoaHoc();
        $khoaHocs = array();
        if (null!=$carts) {
            //$first = true;
            foreach ($carts as $khoaHocId => $count) {
                //$product = $this->Banhs->get($productId, , ['contain' => [] ]);
                //$product = $this->Banhs->read(null,$productId);
                //if(!$first){
                    $khoaHoc = $this->Courses->get($khoaHocId, ['contain' => []]);
                    //show array for check only
                    //echo '<pre>';
                    //print_r($product);
                    //echo '</pre>';
                    $khoaHoc['count'] = $count;
                    $khoaHocs[]=$khoaHoc;
                //}
                //$first = false;
            }
        }
        $ztotal=0;
        foreach ($khoaHocs as $khoaHoc) {
               $ztotal+=  $khoaHoc['count'];   
                      }
        $this->set('ztotal',$ztotal);
        $this->set(compact('khoaHocs'));
    }
    public function update() {
        if ($this->request->is('post')) {
            if (null!=($this->request->data)) {
                $cartUpdateDate = $this->request->data;
                $khoaHocId_list = $cartUpdateDate['khoaHoc_id'];
                $khoaHoc_count_list = $cartUpdateDate['count'];

                $cart = array();
                foreach ($khoaHocId_list as $key => $khoaHoc_id) {
                    $cart[$khoaHoc_id] = $khoaHoc_count_list[$key];
                }

                /*
                Cau truc session cart:
                Session Cart: key => value | product_id => count
                */      
            }        $this->Carts->saveKhoaHoc($cart);
        }

        $this->redirect(array('action'=>'view'));
    }
    public function deleteAll(){
        $this->Carts->saveKhoaHoc(array());
        $this->redirect(array('action'=>'view'));
    }

    public function deleteOneProduct($id){
        print_r($id); die();
        // copy cart
        $cart = $this->Carts->readKhoaHoc();

        // xoa phan tu co id = $id
        unset($cart[$id]);

        // gan lai cart
        $this->Carts->saveKhoaHoc($cart);
    }
    public function checkout($tongtien=null,$user_id=null){
        $this->autoRender = false; // without view
        $this->loadModel('Courses');
        $CTHDTable=  TableRegistry::get('ChiTietHoaDons');
        $HoaDonTable = TableRegistry::get('HoaDons');

        $hoaDon =$HoaDonTable->newEntity();
        $hoaDon->set('total',$tongtien);
        $hoaDon->set('user_id',$user_id);
        // save hoa don
        if ($HoaDonTable->save($hoaDon)) {
            // The $article entity contains the id now
            $hoadon_id = $hoaDon->id;

            $carts = $this->Carts->readKhoaHoc();
            if (null!=$carts) {
            $khoaHocs = array();
              if (null!=$carts) {
                    //$first = true;
                    foreach ($carts as $khoaHocId => $count) {
                        //$product = $this->Banhs->get($productId, , ['contain' => [] ]);
                        //$product = $this->Banhs->read(null,$productId);
                        //if(!$first){
                            $khoaHoc = $this->Courses->get($khoaHocId, ['contain' => []]);
                            //show array for check only
                            //echo '<pre>';
                            //print_r($product);
                            //echo '</pre>';
                            $khoaHoc['count'] = $count;
                            $khoaHocs[]=$khoaHoc;
                        //}
                        //$first = false;
                    }
                }

            foreach ($khoaHocs as $khoaHoc) {
                    // new product
                    $cur_khoaHoc = $this->Courses->newEntity();
                    $cur_khoaHoc->set('hoadon_id',$hoadon_id);
                    $cur_khoaHoc->set('course_id',$khoaHoc->id);
                    $cur_khoaHoc->set('soluong',$khoaHoc['count']);
                   if( $CTHDTable->save($cur_khoaHoc)){
                   }
                            }
                        }
    
        $this->Flash->success(__('Checkout successful!'));
        $this->deleteAll();
        }
    }

}
