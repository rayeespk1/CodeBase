<?php

class Login extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index() {
        $data = array();
        if ($this->session->userdata('user_id')) {
            $this->redirect('', 'index.php/home/index');
        }
        $styles[0]['href'] = 'lib/iCheck/square/blue.css';
        $data['styles'] = $styles;
        $scripts[0]['src'] = 'lib/iCheck/icheck.min.js';
        $data['scripts'] = $scripts;
        
        if ($this->input->post('sign_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[20]');
            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post(mysql_real_escape_string('username'));
                $password = $this->input->post(mysql_real_escape_string('password'));
                $is_logged = $this->Login_model->login($username, $password);
                if ($is_logged) {
                    $this->redirect('', 'index.php/home/index');
                }
            } else {
                $this->setFlash('You have some errors, please check.');
            }
        }
        $this->setTitle('Login');
        $data = $this->getCommonVariables($data);
        $data = $this->setAlertData($data);
        $this->ci_smarty->display('login/index.tpl', $data);
    }

    public function forgot_password() {
        $data = array();
        $styles[0]['href'] = 'lib/iCheck/square/blue.css';
        $data['styles'] = $styles;
        $scripts[0]['src'] = 'lib/iCheck/icheck.min.js';
        $data['scripts'] = $scripts;
        
        if ($this->input->post('send_password')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email|callback_is_valid_email');
            if ($this->form_validation->run() == TRUE) {
                $email = $this->input->post(mysql_real_escape_string('email'));
                $password = $this->Login_model->generateAndUpdatePassword($email);
                $mail_content = $this->Login_model->getForgotMailContent($password);
                $sent = $this->sendMail($email, $mail_content);
                if ($sent) {
                    $this->redirect('Your new password is sent to your registered mail. Please Login with new password' . $password, 'index.php/login/index', TRUE);
                } else {
                    $this->redirect('Unknown error occured please try again.' . $password, 'index.php/login/forgot_password');
                }
            }
        }
        $this->setTitle('Forgot Password');
        $data = $this->getCommonVariables($data);
        $data = $this->setAlertData($data);
        $this->ci_smarty->display('login/forgot_password.tpl', $data);
    }

    Public function logout() {
        $this->Login_model->logout();
        $this->redirect('', 'index.php/login/index');
    }

    public function is_valid_email($email) {
        $this->form_validation->set_message('is_valid_email', 'This is an invalid email.');
        $status = $this->Login_model->isValidEmail($email);
        return $status;
    }

}
