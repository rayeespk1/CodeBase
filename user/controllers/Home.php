<?php

class Home extends Base_Controller {

    public function index() {
        $data = array();
        $this->setTitle('Home');
        $this->view('home/index', $data);
    }

}
