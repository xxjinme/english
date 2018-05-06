<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Component\RequestHandlerComponent;
use Cake\Event\Event;

/**
 * Courses Controller
 *
 *
 * @method \App\Model\Entity\Course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesController extends AppController
{
    public function beforeFilter(Event $event)
    {
       
        // deny all action
        $this->Auth->deny();
        parent::beforeFilter($event);
    }
     public function isAuthorized($user)
    {
        
        // The admin can edit and delete it
        if (in_array($this->request->getParam('action'), ['index','view','edit', 'delete','add'])) {
            if ($user['role'] === 'admin') {
                return true;
            }
            return false;
        }

        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $courses = $this->paginate($this->Courses);

        $this->set(compact('courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => []
        ]);

        $this->set('course', $course);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $course = $this->Courses->newEntity();
        if ($this->request->is('post')) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());
            /* Xử lý ảnh */
            // lấy tên file upload
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = date("Ymd_His");
            $image=$_FILES['course_image']['name'];
            // Lấy tên gốc của file
            $filename = stripslashes($_FILES['course_image']['name']);
            $filetype = $_FILES['course_image']['type'];
            $file_tmp = $_FILES['course_image']['tmp_name'];
            //Lấy phần mở rộng của file
            $explore = explode ('.',$filename); //chia chuoi bang '.'
            $ext = end($explore);
            //kiểm tra file phải hình ảnh ko
            $chophep = array('jpeg','png','bpm','jpg','JPEG','JPG');
            if (in_array($ext,$chophep) === false){
                    $this->Flash->success(__('File upload không hợp lệ'));
                }
            /*----------UPLOADING----------*/
            // đặt tên mới cho file hình up lên
            $image_name = $time.'.'.$ext;
            // gán thêm cho file này đường dẫn
            $newname=$_SERVER["DOCUMENT_ROOT"]. '/english/webroot/img/course_img/' .$image_name;
            //nếu ko có lỗi xảy ra->> tiếp tục upload
                if (move_uploaded_file($file_tmp,$newname)){
                      $this->Flash->success(__('Saved image'));
                      $course->course_image=$image_name;
                    }
            /* Tiếp tục lưu data */

            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());
            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $this->set(compact('course'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);
        if ($this->Courses->delete($course)) {
            $this->Flash->success(__('The course has been deleted.'));
        } else {
            $this->Flash->error(__('The course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
