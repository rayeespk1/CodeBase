<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * CodeBase
 * 
 * @package		CodeBase
 * @author		Rayees PK
 * @copyright           Copyright (c) 20015 - 2018, CodeBase.
 * @license		Opensource
 * @since		Version 1.0
 */
// ------------------------------------------------------------------------
class Base_Controller extends CI_Controller {

    protected $flash_array = array();
    private $title;
    private $description;
    private $keywords;
    private $key;
    private $menu = array();
    private $user_id = NULL;

    public function __construct() {
        parent::__construct();
        $key = 'wert34567@#sd234|45z67';
        $this->key = hash('sha256', $key, true);
        $this->load->model('Common_model');
        $this->menu = $this->Common_model->getMenus();
        if ($this->session->userdata('user_id')) {
            $this->user_id = $this->session->userdata('user_id');
        }
        if (!$this->user_id && $this->router->class != 'login') {
            $this->redirect('', 'index.php/login/index');
        }
//        $this->output->cache(500);
//        date_default_timezone_set("asia/singapore");
    }

    public function view($path, $data) {
        $data = $this->getCommonVariables($data);
        $data = $this->setAlertData($data);
        $data['menu'] = $this->menu;
        $this->ci_smarty->display('common/header.tpl', $data);
        $this->ci_smarty->display('common/page_header.tpl', $data);
        $this->ci_smarty->display('common/menu.tpl', $data);
        $this->ci_smarty->display($path . '.tpl', $data);
        $this->ci_smarty->display('common/page_footer.tpl', $data);
        $this->ci_smarty->display('common/footer.tpl', $data);
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function getCommonVariables($data) {
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        $data['title'] = $this->title;
        return $data;
    }

    public function setFlash($msg, $type = FALSE) {
        if ($msg) {
            $MSG_ARR["MESSAGE"]["DETAIL"] = $msg;
            $MSG_ARR["MESSAGE"]["TYPE"] = $type;
            $MSG_ARR["MESSAGE"]["STATUS"] = TRUE;
        } else {
            $MSG_ARR["MESSAGE"]["STATUS"] = FALSE;
        }
        $this->session->set_flashdata('MSG_ARR', $MSG_ARR);
    }

    public function setAlertData($data) {
        $alert_msg_arr = $this->session->flashdata('MSG_ARR');
        if (isset($alert_msg_arr)) {
            $data['alert_msg'] = $alert_msg_arr["MESSAGE"]["DETAIL"];
            $data['alert_type'] = $alert_msg_arr["MESSAGE"]["TYPE"];
            $data['alert_status'] = $alert_msg_arr["MESSAGE"]["STATUS"];
        } else {
            $data['alert_status'] = FALSE;
        }
        return $data;
    }

    public function encrypt($value) {
        return strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, hash('sha256', $this->key, true), $value, MCRYPT_MODE_ECB)), '+/=', '-_,');
    }

    public function decrypt($value) {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, hash('sha256', $this->key, true), base64_decode(strtr($value, '-_,', '+/=')), MCRYPT_MODE_ECB));
    }

    public function redirect($msg, $page, $message_type = FALSE) {
        $MSG_ARR["MESSAGE"]["DETAIL"] = $msg;
        $MSG_ARR["MESSAGE"]["TYPE"] = $message_type;
        $MSG_ARR["MESSAGE"]["STATUS"] = true;
        $this->session->set_flashdata('MSG_ARR', $MSG_ARR);
        $path = base_url() . $page;
        redirect($path, 'refresh');
        exit();
    }

    public function sendMail($email, $content) {
        $site_info = $this->Common_model->getSiteInfo();
        $this->load->library('email');
        $this->email->from($site_info['email'], 'realestateae.com');
        $this->email->to($email);
        $this->email->subject('Password reset');
        $this->email->message($content);
        $this->email->set_mailtype('html');
        $this->email->send();
    }

}
