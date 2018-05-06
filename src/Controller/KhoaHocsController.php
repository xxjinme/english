<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * KhoaHocs Controller
 *
 *
 * @method \App\Model\Entity\KhoaHoc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhoaHocsController extends AppController
{
    public function initialize() {
       parent::initialize();
       $this->modelClass = 'Courses';
   }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(); // allow all action for customer
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $courses = $this->paginate($this->Courses); //phân trang tất cả sản phẩm

        $this->set(compact('courses'));
        $this->set('_serialize', ['courses']);
    }
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => []
        ]);

        $this->set('course', $course);
    }
    /**
     * View method
     *
     * @param string|null $id Khoa Hoc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
}