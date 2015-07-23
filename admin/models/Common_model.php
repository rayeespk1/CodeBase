<?php

class Common_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getSiteInfo() {
        $site_info = array();
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get('site_info');
        $i = 0;
        foreach ($query->result_array() as $row) {
            $site_info = $row;
        }
        return $site_info;
    }

    public function getMenus() {
        $menu = array();
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('menu');
        $i = 0;
        foreach ($query->result_array() as $row) {
            $menu[$i] = $row;
            $menu[$i]['sub_menu'] = $this->getSubMenu($row['menu_id']);
            $i++;
        }
        return $menu;
    }

    public function getSubMenu($menu_id) {
        $sub_menu = array();
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->where('menu_id', $menu_id);
        $query = $this->db->get('sub_menu');
        $i = 0;
        foreach ($query->result_array() as $row) {
            $sub_menu[$i] = $row;
            $i++;
        }
        return $sub_menu;
    }

}
