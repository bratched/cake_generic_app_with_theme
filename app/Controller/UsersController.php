<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Users Controller
 *
 * @property User $User
 */

    class UsersController extends AppController {


        public $components = array(
            'FileUpload'=>array(
                'uploadDir'=>'profile_picture',
                'fileModel'=>'User',
                'field'=>'profile_picture'
            )
        );



/**
 * beforeFilter, its is controller filter method gets executed before any action is executed 
 * @access public
 * @author Sandip Ghadge
 * @return void
 *
 */
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow(array('logout','forgotPassword','securityCheck','changePassword','resetPassword'));
        //$this->Auth->allow('initDB');
   	}



    public function initDB() {
        $role = $this->User->Role;
        //Allow SuperAdmins to everything
        $role->id = 1;
        $this->Acl->allow($role, 'controllers');

        //allow admin to posts and widgets
        $role->id = 2;
        $this->Acl->deny($role, 'controllers');
        $this->Acl->allow($role, 'controllers/Dashboards/index');
        $this->Acl->allow($role, 'controllers/Users');

        //allow members to only add and edit on posts and widgets
        $role->id = 3;
        $this->Acl->deny($role, 'controllers');
        $this->Acl->allow($role, 'controllers/Dashboards/index');
        $this->Acl->allow($role, 'controllers/Users/myProfile');
        $this->Acl->allow($role, 'controllers/Users/updateProfile');
        $this->Acl->allow($role, 'controllers/Users/changePassword');

        echo "all done";
        exit;
    }


        /**
 * login method
 * @access public
 * @author Sandip Ghadge
 * @return void
 *
 */
	public function login() {
		$this->set("title_for_layout"," Login"); 
		$this->layout='login';
        if($this->Auth->loggedIn()){
            $this->redirect('/dashboard');
        }
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }
	}
	
	
	
/**
 * logout method
 * @access public
 * @author Sandip Ghadge
 * @return void
 *
 */
	public function logout() {
	   $this->Session->destroy();
	   $this->redirect($this->Auth->logout());
	}





/**
 * myProfile  method
 * @author Sandip Ghadge
 * @param void
 * @return void
 *
 */
    public function myProfile() {
    	$this->set("title_for_layout"," My Profile"); 
        $options = array('conditions' => array('User.' . $this->User->primaryKey => AuthComponent::user('id')));
        $this->set('user', $this->User->find('first', $options));
    }






/** changePasswordAdmin method
 *  @author Sandip Ghadge
 *  @access public
 *  @param $user_id
 *  @return void
 */
    public function changePasswordAdmin($user_id){
    	$this->layout= 'ajax';
        if($this->request->is('post')){
            $this->User->set($this->request->data);
            if($this->User->validates(array('fieldList'=>array('password','confirm_password')))){
                $this->User->id = $this->request->data['User']['id'];
                if ($this->User->saveField('password',$this->data['User']['password'])) {
                    $C_validaton_errors['no_error'] = "Password updated successfully";
                }
            }else{
                $C_validaton_errors = $this->User->validationErrors;

            }

            echo json_encode($C_validaton_errors); exit;
        }
        $this->set('id',$user_id);
    }


/**
 * changePassword method
 * @access public
 * return void
 *
 *
 */
        function changePassword(){
        $this->layout= 'ajax';
        $C_validaton_errors=array();
        if($this->request->is('post')){
            $this->User->id=Authcomponent::user('id');
            $old_pass=$this->User->field('password');
            if($old_pass == AuthComponent::password($this->request->data['User']['old_password'])){
                $this->User->set($this->request->data);
                if($this->User->validates(array('fieldList'=>array('password','confirm_password')))){
                    if ($this->User->saveField('password',$this->data['User']['password'])) {
                        $C_validaton_errors['no_error'] = "Password updated successfully";
                    }
                }else{
                    $C_validaton_errors = $this->User->validationErrors;

                }
            }else{
                $C_validaton_errors['old_password'] = 'you entered wrong old password ';
            }
            echo json_encode($C_validaton_errors); exit;
        }

    }


 /**
  *  forgotPassword method
  *
  */

        public function forgotPassword(){
            $this->layout= 'ajax';
            $result = array();
            if($this->request->is('post')) {
                $C_username = $this->request->data['User']['username'];
                $user = $this->User->findByUsername($C_username);
                if(count($user)==0){
                    $result['fail'] = 'no user account found with this email address';
                }else{
                    $temporary_password = substr(md5(microtime()), -15, 12);
                    $this->User->id = $user['User']['id'];
                    $this->User->saveField('temporary_password', $temporary_password);
                    $this->_sendPasswordRecoveryEmail($user,$temporary_password);
                    $result['success'] = 'password recovery link send to your registered email address';
                }
                echo json_encode($result);exit;
            }


        }


/**_sendPasswordRecoveryEmail method,
 * Function send the password recovery email to user
 * @access public
 * @author sandip ghadge
 * @param array $user_data
 * @param string $temporary_password
 */
        public  function _sendPasswordRecoveryEmail($user_data,$temporary_password){
            $email = new CakeEmail();
            $email->config('gmail');
            //$email->reset();
            $email->template('password_recovery_email', 'default');
            $email->emailFormat('html');
            $email->viewVars(array(
                'temporary_password'=>$temporary_password,
                'user_data'=>$user_data
            ));

            $from = Configure::read('FROM_EMAIL_ADDRESS');
            $from_text = Configure::read('FROM_EMAIL_TEXT');
            $email->from(array($from => $from_text));
            $email->to($user_data['User']['email_address']);
            $email->subject('password recovery email');
            $result=$email->send();
        }



        public function securityCheck(){
            $this->layout= 'ajax';
            $result = array();
            if($this->request->is('post')) {
                $temporary_password = $this->request->data['User']['temporary_password'];
                $user = $this->User->findByTemporaryPassword($temporary_password);

                if(count($user)==0){
                    print_r(json_encode($user));exit;

                }else{
                    //	$this->Auth->login($user);
                    $this->Session->write('security_code',$temporary_password);
                    $result['success'] = 'verified';
                }
                echo json_encode($result);exit;
            }
        }


        public function resetPassword(){
            $this->layout= 'ajax';
            $C_validaton_errors=array();
            if($this->request->is('post')){
                $this->User->set($this->request->data);
                if($this->User->validates(array('fieldList'=>array('password','confirm_password')))){
                    $user = $this->User->findByTemporaryPassword($this->Session->read('security_code'));
                    $this->User->id = $user['User']['id'];
                    if ($this->User->saveField('password',$this->data['User']['password'])) {
                        $C_validaton_errors['no_error'] = "Password updated successfully";
                    }
                }else{
                    $C_validaton_errors = $this->User->validationErrors;

                }

                echo json_encode($C_validaton_errors); exit;
            }

        }


    public function changeProfilePicture(){
        $this->layout = 'ajax';
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}


/**
 * updateProfile method,
 * logged in user can update his own profile
 * @author Sandip Ghadge
 * @param void
 * @return void
 */
        public function updateProfile() {

            if ($this->request->is('post') || $this->request->is('put')) {
                    $file_name = $this->FileUpload->doFileUpload();
                    if($file_name){
                        $this->request->data['User']['profile_picture'] = $file_name;
                        $this->User->removeUploadedFile($this->request->data['User']['old_profile_picture'],'profile_picture');
                    }else{
                        unset($this->request->data['User']['profile_picture']);
                    }
                    if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(__('Profile has been updated'),'flash_green');
                        $this->redirect('/my-profile');
                    } else {

                        $this->Session->setFlash(__('Profile could not update, please try again.'),'flash_red');
                    }


            } else {
                $options = array('conditions' => array('User.' . $this->User->primaryKey => AuthComponent::user('id')));
                $this->request->data = $this->User->find('first', $options);
            }

            $roles = $this->User->Role->find('list');
            $this->set(compact('roles'));
        }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
