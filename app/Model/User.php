<?php
App::uses('AppModel', 'Model');


App::uses('SimplePasswordHasher', 'Controller/Component/Auth');







class User extends AppModel {
    public $validate = array(
	    'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Name is required'
            )
        ),
	
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
		'password_confiramtion'=>array(
			'Not empty'=>array(
			'rule'=>'notEmpty',
			'message'=>'Please enter your password'
			),
			'Match password'=>array(
			'rule'=>'matchPassword',
			'message'=>'Your password do not match'
			)
		),
		
		'email'=>array(
		'valid email'=>array('email'),
		'rule'=>array('email'),
		'message'=>'Please enter a valid email'
			),
		
		
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ),
    );
	
	public function matchPasswords($data){
	
	if ($data['password'] == $this->data['User']['password_confirmation']){
	return true;
	}
	$this->invalidate('password_confirmation', 'Your password do not match');
	return false;
	}
	
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
	
	
	
	
	
	
	
    return true;
}
}

?>