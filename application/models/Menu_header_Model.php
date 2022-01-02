<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_header_Model extends CI_Model
{

    public function header_elements()
    {
        $querys = $this->db->query("SELECT * FROM menu ");
        $id2 = $querys->row();
        $data['logo'] = $id2->logo;
        $data['btn_txt'] = $id2->btn_txt;
        $data['btn_icon'] = $id2->btn_icon;
        $data['menus'] = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();
        // echo $this->db->last_query(); exit;
        foreach ($data['menus'] as $key => $value) {
            $data['menus'][$key]->submenu = $this->db->where('parentId', $value->id)->order_by('id', 'ASC')->get('menu')->result();
        }

        //   print("<pre>".print_r($data['menus'],true)."</pre>"); exit;


        return $data;
    }
}
