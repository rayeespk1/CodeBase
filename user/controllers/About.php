<?php

class About extends Base_Controller {

    public function about_us() {
        $data = array();
        $this->setTitle('About Us');
        $this->view('about/about_us', $data);
    }

}
