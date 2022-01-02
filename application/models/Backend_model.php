<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend_model extends CI_Model
{
    ########################## Header Start ###################
    public function all_header_info()
    {
        $q = $this->db->query('select * FROM menu ');
        $data = $q->result_array();
        return $data;
    }
   
    public function delete_header_from_db($user_id){
         $this->db->delete('menu', array('id' => $user_id));
    }

    ########################## Header End ###################

    ########################## Header app text & image start ###################
    public function all_header_info_text()
    {
        $q = $this->db->query('select * FROM head_app ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_headerCard_from_db($user_id){
        $this->db->delete('head_app', array('id' => $user_id));
   }
    ########################## Header app text & image end ###################

    ########################## Features start ###################
    public function features_info_text()
    {
        $q = $this->db->query('select * FROM features ');
        $data = $q->result_array();
        return $data;
    }

    public function delete_features_from_db($user_id){
        $this->db->delete('features', array('id' => $user_id));
   }
    
    ########################## Features end ###################

    ########################## Features start ###################
    public function featuresDsc_info_text()
    {
        $q = $this->db->query('select * FROM featuresdsc ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_featuresDsc_from_db($user_id){
        $this->db->delete('featuresdsc', array('id' => $user_id));
   }
    
    ########################## Features end ###################
    ########################## userInterface start ###################
    public function userInterface_info_text()
    {
        $q = $this->db->query('select * FROM user_interface ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_userInterface_from_db($user_id){
        $this->db->delete('user_interface', array('id' => $user_id));
   }
   
    ########################## Features end ###################
    ########################## Discuse start ###################
    public function discuss_info_text()
    {
        $q = $this->db->query('select * FROM discuse ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_discussArea_from_db($user_id){
        $this->db->delete('discuse', array('id' => $user_id));
   }
    ########################## Discuse end ###################
    ########################## Members start ###################
    public function members_info_text()
    {
        $q = $this->db->query('select * FROM members ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_members_from_db($user_id){
        $this->db->delete('members', array('id' => $user_id));
   }
    
    ########################## Discuse end ###################

    ########################## Members start ###################
    public function all_membersDsc_text()
    {
        $q = $this->db->query('select * FROM membersdsc ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_membersDsc_from_db($user_id){
        $this->db->delete('membersdsc', array('id' => $user_id));
   }
    ########################## Discuse end ###################
    ########################## Video start ###################
    public function video_info_text()
    {
        $q = $this->db->query('select * FROM video ');
        $data = $q->result_array();
        return $data;
    }
    ########################## Discuse end ###################
    ########################## Video start ###################
    public function choosePlan_info_text()
    {
        $q = $this->db->query('select * FROM chooseplan ');
        $data = $q->result_array();
        return $data;
    }
    ########################## Video end ###################
    ########################## Plan Items start ###################
    public function planItems_info_text()
    {
        $q = $this->db->query('select * FROM planitems ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_planitems_from_db($user_id){
        $this->db->delete('planitems', array('id' => $user_id));
   }
   
    ########################## Plan Items end ###################
    ########################## Products start ###################
    public function products_info_text()
    {
        $q = $this->db->query('select * FROM products ');
        $data = $q->result_array();
        return $data;
    }
    ########################## Plan Items end ###################
    ########################## Products start ###################
    public function productsSlider_info_text()
    {
        $q = $this->db->query('select * FROM productsSlider ');
        $data = $q->result_array();
        return $data;
    }
    ########################## Plan Items end ###################
    ########################## Products start ###################
    public function askedQuestion_info_text()
    {
        $q = $this->db->query('select * FROM askedquestion ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_aksedQuestion_from_db($user_id){
        $this->db->delete('askedquestion', array('id' => $user_id));
   }
    
    ########################## Plan Items end ###################
    ########################## customers start ###################
    public function customers_info_text()
    {
        $q = $this->db->query('select * FROM customers ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_customers_delete_from_db($user_id){
        $this->db->delete('customers', array('id' => $user_id));
   }
   
    ########################## Plan Items end ###################
    ########################## News start ###################
    public function news_info_text()
    {
        $q = $this->db->query('select * FROM newsarea ');
        $data = $q->result_array();
        return $data;
    }
    ########################## News end ###################
    ########################## NewsCards end ###################
    public function newsCards_info_text()
    {
        $q = $this->db->query('select * FROM newscards ');
        $data = $q->result_array();
        return $data;
    }
    public function delete_newsCards_Delete_from_db($user_id){
        $this->db->delete('newscards', array('id' => $user_id));
   }
    
    ########################## NewsCards end ###################
    ########################## NewsCardsCol end ###################

    public function newsCardsCol_info_text()
    {
        $q = $this->db->query('select * FROM newscardscol ');
        $data = $q->result_array();
        return $data;
    }
    public function newsCardsColumn_delete_from_db($user_id){
        $this->db->delete('newscardscol', array('id' => $user_id));
   }
   
    ########################## Plan Items end ###################
    ########################## NewsCardsCol end ###################

    public function questionFooter_info_text()
    {
        $q = $this->db->query('select * FROM questionfooter ');
        $data = $q->result_array();
        return $data;
    }
    ########################## questionFooter end ###################
    ########################## addressFooter end ###################

    public function addressFooter_info_text()
    {
        $q = $this->db->query('select * FROM addressfooter ');
        $data = $q->result_array();
        return $data;
    }
    public function addressFooter_delete_from_db($user_id){
        $this->db->delete('addressfooter', array('id' => $user_id));
   }
    
    ########################## addressFooter end ###################
    ########################## company end ###################

    public function company_info_text()
    {
        $q = $this->db->query('select * FROM company ');
        $data = $q->result_array();
        return $data;
    }
    public function company_delete_from_db($user_id){
        $this->db->delete('company', array('id' => $user_id));
   }
    
    ########################## addressFooter end ###################
    ########################## services end ###################

    public function services_info_text()
    {
        $q = $this->db->query('select * FROM services ');
        $data = $q->result_array();
        return $data;
    }
    public function services_delete_from_db($user_id){
        $this->db->delete('services', array('id' => $user_id));
   }
   
    ########################## services end ###################
    ########################## quickLink end ###################

    public function quickLink_info_text()
    {
        $q = $this->db->query('select * FROM quicklink ');
        $data = $q->result_array();
        return $data;
    }
    public function quickLink_delete_from_db($user_id){
        $this->db->delete('quicklink', array('id' => $user_id));
   }
   
    ########################## quickLink end ###################
    ########################## mediafooter end ###################

    public function mediaFooter_info_text()
    {
        $q = $this->db->query('select * FROM mediafooter ');
        $data = $q->result_array();
        return $data;
    }
    public function mediaFooter_delete_from_db($user_id){
        $this->db->delete('mediafooter', array('id' => $user_id));
   }
    ########################## mediafooter end ###################


}
