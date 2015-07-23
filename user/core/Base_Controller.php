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
    private $styles = array();
    private $scripts = array();

    public function __construct() {
        parent::__construct();
        $key = 'wert34567@#sd234|45z67';
        $this->key = hash('sha256', $key, true);
//        $this->output->cache(500);
        date_default_timezone_set("asia/singapore");
    }

    public function view($path, $data) {
        $data = $this->getCommonVariables($data);
        $data = $this->setFlashData($data);
        $this->ci_smarty->display('common/header.tpl', $data);
        $this->ci_smarty->display('common/page_header.tpl', $data);
        $this->ci_smarty->display($path . '.tpl', $data);
        $this->ci_smarty->display('common/page_footer.tpl', $data);
        $this->ci_smarty->display('common/footer.tpl', $data);
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function addScripts($src) {
        $this->scripts = $src;
    }

    public function addStyles($href, $rel = 'stylesheet', $media = 'screen') {
        $this->styles[$href] = $href;
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
        $data['styles'] = $this->styles;
        $data['scripts'] = $this->scripts;
        $data['title'] = $this->title;
        return $data;
    }
    
    public function setFlashData($data) {
        $FLASH_ARR_MSG = $this->session->flashdata('MSG_ARR');
        if (isset($FLASH_ARR_MSG)) {
            $data['MESSAGE_DETAILS'] = $FLASH_ARR_MSG["MESSAGE"]["DETAIL"];
            $data['MESSAGE_TYPE'] = $FLASH_ARR_MSG["MESSAGE"]["TYPE"];
            $data['MESSAGE_STATUS'] = $FLASH_ARR_MSG["MESSAGE"]["STATUS"];
        } else {
            $data['MESSAGE_STATUS'] = FALSE;
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

}
