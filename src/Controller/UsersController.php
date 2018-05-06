<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher; // hash password
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Network\Session;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
       
        // allow only login, forgotpassword
        $this->Auth->allow(['login', 'logout','signup']);
        parent::beforeFilter($event);
    }
    public function isAuthorized($user)
    {
        // All registered users can add articles
        if (in_array($this->request->getParam('action'), ['signup','login'])) {
            return true;
        }

        // The owner of an article can edit and delete it
        if (in_array($this->request->getParam('action'), ['index','view','edit', 'delete','add'])) {
            if ($user['user_role'] === 'admin') {
                return true;
            }
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
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['HoaDons']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function signup(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->set('checkcode', $this->request->getData('email')); // gan checkcode
            $email = $this->request->getData('email');
            if ($this->Users->save($user))
            {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect( ['controller' => 'Courses', 'action' => 'index']);
            }
            $this->Flash->error(__('The user could not be singed up. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    public function active($id=null,$checkcode=null){
         $user = $this->Users->newEntity();
        // $user= $this->Users->find(['email'=>$id]);
        $user = $this->Users->find('all',['conditions'=>['email'=>$id]])->first();
         if ($user->checkcode === $checkcode){
            $user->set('active','1');
            if($this->Users->save($user)){
                 $this->Flash->success(__('You have active your account'));  
                return $this->redirect(
                    ['controller' => 'Users', 'action' => 'login']
                );
                 $this->Flash->success(__('You have active your account'));  
            }
            else{
                 $this->Flash->error(__('The user could not active. Please, try again.'));
            }
         }
         else {
            $this->Flash->error(__('The user could not active. Please, try again.'));
         }
    }

   public function login()
    {
        
        if(isset($_SESSION)) {
           session_destroy();
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
        $this->set(compact('user'));
    }
    
    public function logout()
    {
        if(isset($_SESSION)) {
           session_destroy();
        }
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
}
