<?php

require_once ('Model.php');

class UserModel extends Model{

    protected $table = 'users';

    public function signUp(array $data) {
        $errors = [];

        if(!isset($data['username']) || $data['username'] === "") {
            $errors['username'] = 'Username is required';
        }
        if(!isset($data['email']) || $data['email'] === "") {
            $errors['email'] = 'Email is required';
        }
        if(!isset($data['password']) || $data['password'] === "") {
            $errors['password'] = 'Password is required';
        }
        if(!isset($data['password_confirm']) || $data['password_confirm'] === "") {
            $errors['repassword'] = 'Confirm password';
        }
        if($data['password'] != $data['password_confirm']) {
            $errors['repassword'] = 'Password doesn\'t match';
        }

        $db_username = $this->select(['username'], ' username = "' . $data['username'] . '"');
        if($db_username != null) {
            $errors['usernameExists'] = 'Username already taken';
        }
        $db_email = $this->select(['username'], 'email = "' . $data['email']);
        if($db_email != null) {
            $errors['emailExists'] = 'Email already exists';
        }

        $result['success'] = true;
        if(count($errors) == 0) {
            $password = md5($data['password']);
            $this->create(['username' => $data['username'], 'email' => $data['email'], 'password' => $password]);
        } else {
            $result['success'] = false;
        };
        $result['errors'] = $errors;
        return $result;
    }

    public function signIn(array $data) {
        $errors = [];

        if(!isset($data['username']) || $data['username'] === "") {
            $errors['username'] = 'Username is required';
        }
        if(!isset($data['password']) || $data['password'] === "") {
            $errors['password'] = 'Password is required';
        }

        $result['success'] = true;
        if(count($errors) == 0) {
            $password = $data['password'];
            $where = 'username = "' . $data['username'] . '" AND password = "' . md5($password) . '"';
            $result['data'] = $this->select([], $where);
            if($result['data'] == null) {
                $errors['doesntExists'] = 'Username and password does not match';
                $result['success'] = false;
            }
        } else {
            $result['success'] = false;
        }
        $result['errors'] = $errors;

        return $result;

    }

    public function signOut() {

    }
}