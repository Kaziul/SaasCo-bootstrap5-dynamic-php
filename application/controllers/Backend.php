<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['main_content'] = $this->load->view('main_content', '', true);
		$this->load->view('dashboard', $data);
	}

	// ########################## Header Start ###################
	public function add_menu()
	{
		$data['menuName'] = "";
		$data['parentId'] = "";
		$data['page_link'] = "";
		$this->form_validation->set_rules('menuName', 'Latest Project Heading', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['menuName'] = $this->input->post('menuName');
			$data['parentId'] = $this->input->post('parentId');
			$data['page_link'] = $this->input->post('page_link');
			$suc = $this->db->insert('menu', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
			}
		}
		$data['main_content'] = $this->load->view('pages/Head/add-menu', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function edit_update_header($ID = null)
	{
		$r = $this->db->query("select * FROM menu where id = $ID ");
		$user = $r->row();
		$data['menuName'] = $user->menuName;
		$data['parentId'] = $user->parentId;
		$data['logo'] = $user->logo;
		$data['page_link'] = $user->page_link;
		$data['btn_txt'] = $user->btn_txt;
		$data['btn_icon'] = $user->btn_icon;
		$this->form_validation->set_rules('menuName', 'Latest Project Heading', 'trim|required');
		if ($this->form_validation->run() == true) {
			$idata['menuName'] = $this->input->post('menuName');
			$idata['parentId'] = $this->input->post('parentId');
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('logo')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['logo']);
				$idata['logo'] = $sdata['file_name'];
			}
			$idata['page_link'] = $this->input->post('page_link');
			$idata['btn_txt'] = $this->input->post('btn_txt');
			$idata['btn_icon'] = $this->input->post('btn_icon');
			$suc = $this->db->update('menu', $idata, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-menu');
			}
		}
		$data['main_content'] = $this->load->view('pages/Head/head-edit-update', $data, true);
		$this->load->view('dashboard', $data);
	}



	public function edit_update_head()
	{
		$data = array();
		$data['all_header_info'] = $this->Backend_model->all_header_info();
		$data['main_content'] = $this->load->view('pages/Head/edit-update-head-list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_header($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_header_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('head-edit-update');
	}
	########################## Header End ###################

	########################## Header app text & image start ###################

	public function add_Header_Card()
	{
		$data['title_head'] = '';
		$data['desc_head'] = '';
		$data['btn_txt_head'] = '';
		$data['btn_link'] = '';
		$data['card_head'] = '';
		$data['img_head'] = '';
		$this->form_validation->set_rules('title_head', 'Latest Project Heading', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['title_head'] = $this->input->post('title_head');
			$data['desc_head'] = $this->input->post('desc_head');
			$data['btn_txt_head'] = $this->input->post('btn_txt_head');
			$data['btn_link'] = $this->input->post('btn_link');
			$data['card_head'] = $this->input->post('card_head');
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('img_head')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['img_head']);
				$data['img_head'] = $sdata['file_name'];
			}
			$suc = $this->db->insert('head_app', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-Headercard');
			}
		}
		$data['main_content'] = $this->load->view('pages/headCardtxt/add_Header_card', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_header_card($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_headerCard_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('head-card-edit-update');
	}
	public function edit_update_header_card($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM head_app where id = $ID ");
		$user = $r->row();
		$data['title_head'] = $user->title_head;
		$data['desc_head'] = $user->desc_head;
		$data['btn_txt_head'] = $user->btn_txt_head;
		$data['btn_link'] = $user->btn_link;
		$data['card_head'] = $user->card_head;
		$data['img_head'] = $user->img_head;
		if (empty($_FILES['img_head']['name'])) {
			$this->form_validation->set_rules('img_head', 'Image', 'required');
		}
		$this->form_validation->set_rules('title_head', ' Title', 'trim|required');
		$this->form_validation->set_rules('desc_head', 'Description', 'trim|required');
		$this->form_validation->set_rules('btn_txt_head', 'Button Text', 'trim|required');
		$this->form_validation->set_rules('btn_link', 'Button Link', 'trim|required');
		$this->form_validation->set_rules('card_head', 'Card Text', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['title_head'] = $this->input->post('title_head');
			$data['desc_head'] = $this->input->post('desc_head');
			$data['btn_txt_head'] = $this->input->post('btn_txt_head');
			$data['btn_link'] = $this->input->post('btn_link');
			$data['card_head'] = $this->input->post('card_head');
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('img_head')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH . '/back-end/uploads/' . $data['img_head']);
				$data['img_head'] = $sdata['file_name'];
			}
			$suc = $this->db->update('head_app', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('head-card-edit-update');
			}
		}
		$data['main_content'] = $this->load->view('pages/headCardtxt/head_card_text_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function edit_update_head_text()
	{
		$data = array();
		$data['all_header_card_info'] = $this->Backend_model->all_header_info_text();
		$data['main_content'] = $this->load->view('pages/headCardtxt/head_card_text_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## Header app text & image end ###################

	########################## Features Start ###################
	public function features_edit_update($ID = null)
	{
		$data = array();
		$data['features_title'] = '';
		$data['features_desc'] = '';
		if ($ID) {
			$r = $this->db->query("select * FROM features where id = $ID ");
			$user = $r->row();
			$data['features_title'] = $user->features_title;
			$data['features_desc'] = $user->features_desc;
		}
		$this->form_validation->set_rules('features_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('features_desc', 'Description', 'trim|required');
		if ($this->form_validation->run() == true) {
			$idata['features_title'] = $this->input->post('features_title');
			$idata['features_desc'] = $this->input->post('features_desc');
			if ($ID) {
				$suc = $this->db->update('features', $idata, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'updated successfully !!';
					$this->session->set_userdata($sdata);
					redirect('features-info-list');
				}
			} else {
				$suc = $this->db->insert('features', $idata);
				if ($suc) {
					$sdata['messeage'] = 'Insert successfully !!';
					$this->session->set_userdata($sdata);
					redirect('add-features');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/Features/features_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function features_info_list()
	{
		$data = array();
		$data['all_features_info'] = $this->Backend_model->features_info_text();
		$data['main_content'] = $this->load->view('pages/Features/features_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_features_card($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_features_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('head-card-edit-update');
	}
	########################## Features End ###################

	########################## FeaturesDsc Start ###################
	public function featuresDsc_edit_update($ID = null)
	{

		$data = array();
		$data['featuresDsc_title'] = '';
		$data['featuresDsc_desc'] = '';
		$data['icon'] = '';
		if ($ID) {
			$data = array();
			$r = $this->db->query("select * FROM featuresdsc where id = $ID ");
			$user = $r->row();
			$data['featuresDsc_title'] = $user->featuresDsc_title;
			$data['featuresDsc_desc'] = $user->featuresDsc_desc;
			$data['icon'] = $user->icon;
		}
		$this->form_validation->set_rules('featuresDsc_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('featuresDsc_desc', 'Description', 'trim|required');
		$this->form_validation->set_rules('icon', 'Icon', 'trim|required');
		if ($this->form_validation->run() == true) {
			$idata['featuresDsc_title'] = $this->input->post('featuresDsc_title');
			$idata['featuresDsc_desc'] = $this->input->post('featuresDsc_desc');
			$idata['icon'] = $this->input->post('icon');
			if ($ID) {
				$suc = $this->db->update('featuresdsc', $idata, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'updated successfully !!';
					$this->session->set_userdata($sdata);
					redirect('featuresDsc-info-list');
				}
			} else {
				$suc = $this->db->insert('featuresdsc', $idata);
				if ($suc) {
					$sdata['messeage'] = 'Insert successfully !!';
					$this->session->set_userdata($sdata);
					redirect('add-featuresDsc');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/FeaturesDesign/featuresDsc_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function featuresDsc_info_list()
	{
		$data = array();
		$data['all_features_info'] = $this->Backend_model->featuresDsc_info_text();
		$data['main_content'] = $this->load->view('pages/FeaturesDesign/featuresDsc_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_featuresDsc_card($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_featuresDsc_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('featuresDsc-info-list');
	}
	########################## FeaturesDsc End ###################


	########################## User Interface Start ###################
	public function edit_update_userInterface($ID = null)
	{
		$data = array();
		$data['userInterface_img'] = '';
		$data['userInterface_title'] = '';
		$data['userInterface_desc1'] = '';
		$data['userInterface_desc2'] = '';
		$data['userInterface_desc3'] = '';
		$data['userInterface_btn'] = '';
		$data['userInterface_btnLink'] = '';
		if ($ID) {
			$data = array();
			$r = $this->db->query("select * FROM user_interface where id = $ID ");
			$user = $r->row();
			$data['userInterface_img'] = $user->userInterface_img;
			$data['userInterface_title'] = $user->userInterface_title;
			$data['userInterface_desc1'] = $user->userInterface_desc1;
			$data['userInterface_desc2'] = $user->userInterface_desc2;
			$data['userInterface_desc3'] = $user->userInterface_desc3;
			$data['userInterface_btn'] = $user->userInterface_btn;
			$data['userInterface_btnLink'] = $user->userInterface_btnLink;
		}
		if (empty($_FILES['userInterface_img']['name'])) {
			$this->form_validation->set_rules('userInterface_img', 'Image', 'required');
		}
		$this->form_validation->set_rules('userInterface_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('userInterface_desc1', 'Description', 'trim|required');
		$this->form_validation->set_rules('userInterface_desc2', 'Button Text', 'trim|required');
		$this->form_validation->set_rules('userInterface_desc3', 'Button Link', 'trim|required');
		$this->form_validation->set_rules('userInterface_btn', 'Card Text', 'trim|required');
		$this->form_validation->set_rules('userInterface_btnLink', 'Card Text', 'trim|required');
		if ($this->form_validation->run() == true) {
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('userInterface_img')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['userInterface_img']);
				$idata['userInterface_img'] = $sdata['file_name'];
			}
			$idata['userInterface_title'] = $this->input->post('userInterface_title');
			$idata['userInterface_desc1'] = $this->input->post('userInterface_desc1');
			$idata['userInterface_desc2'] = $this->input->post('userInterface_desc2');
			$idata['userInterface_desc3'] = $this->input->post('userInterface_desc3');
			$idata['userInterface_btn'] = $this->input->post('userInterface_btn');
			$idata['userInterface_btnLink'] = $this->input->post('userInterface_btnLink');
			if ($ID) {
				$suc = $this->db->update('user_interface', $idata, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'Data successfully update.. !!';
					$this->session->set_userdata($sdata);
					redirect('userInterface-info-list');
				}
			} else {
				$suc = $this->db->insert('user_interface', $idata);
				if ($suc) {
					$sdata['messeage'] = 'Insert successfully !!';
					$this->session->set_userdata($sdata);
					redirect('add-userInterface');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/UserInterface/userInterface_text_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function userInterface_info_list()
	{
		$data = array();
		$data['all_userInterface_info'] = $this->Backend_model->userInterface_info_text();
		$data['main_content'] = $this->load->view('pages/UserInterface/userInterface_text_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_userInterface_card($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_userInterface_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('userInterface-info-list');
	}
	########################## User Interface End ###################

	########################## Discuse Start ###################

	public function add_discuss()
	{
		$data = array();
		$data['discuse_icon'] = "";
		$data['discuse_iconTxt'] = "";
		$data['discuse_num'] = "";
		$this->form_validation->set_rules('discuse_icon', 'Icon', 'trim|required');
		$this->form_validation->set_rules('discuse_iconTxt', 'Icon Text', 'trim|required');
		$this->form_validation->set_rules('discuse_num', 'Number', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['discuse_icon'] = $this->input->post('discuse_icon');
			$data['discuse_iconTxt'] = $this->input->post('discuse_iconTxt');
			$data['discuse_num'] = $this->input->post('discuse_num');
			$suc = $this->db->insert('discuse', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
			}
		}
		$data['main_content'] = $this->load->view('pages/Discuss/add_discuss', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function edit_update_discuss($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM discuse where id = $ID ");
		$user = $r->row();
		$data['discuse_icon'] = $user->discuse_icon;
		$data['discuse_iconTxt'] = $user->discuse_iconTxt;
		$data['discuse_num'] = $user->discuse_num;
		$data['discuse_title'] = $user->discuse_title;
		$data['discuse_btn'] = $user->discuse_btn;
		$data['discuse_btnicon'] = $user->discuse_btnicon;
		$data['discuse_link'] = $user->discuse_link;
		$this->form_validation->set_rules('discuse_icon', ' Title', 'trim|required');
		$this->form_validation->set_rules('discuse_iconTxt', 'Description', 'trim|required');
		$this->form_validation->set_rules('discuse_num', 'Button Text', 'trim|required');
		$this->form_validation->set_rules('discuse_title', 'Button Link', 'trim|required');
		$this->form_validation->set_rules('discuse_btn', 'Card Text', 'trim|required');
		$this->form_validation->set_rules('discuse_btnicon', 'Card Text', 'trim|required');
		$this->form_validation->set_rules('discuse_link', 'Card Text', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['discuse_icon'] = $this->input->post('discuse_icon');
			$data['discuse_iconTxt'] = $this->input->post('discuse_iconTxt');
			$data['discuse_num'] = $this->input->post('discuse_num');
			$data['discuse_title'] = $this->input->post('discuse_title');
			$data['discuse_btn'] = $this->input->post('discuse_btn');
			$data['discuse_btnicon'] = $this->input->post('discuse_btnicon');
			$data['discuse_link'] = $this->input->post('discuse_link');

			$suc = $this->db->update('discuse', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('discussArea-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/Discuss/discuss_text_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function discussArea_info_list()
	{
		$data = array();
		$data['all_discuss_info'] = $this->Backend_model->discuss_info_text();
		$data['main_content'] = $this->load->view('pages/Discuss/discuss_text_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_discussArea_card($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_discussArea_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('discussArea-info-list');
	}
	########################## Discuss End ###################

	########################## Members Start ###################

	public function members_edit_update($ID = null)
	{

		$data = array();
		$data['members_title'] = '';
		$data['members_desc'] = '';

		if ($ID) {
			$data = array();
			$r = $this->db->query("select * FROM members where id = $ID ");
			$user = $r->row();
			$data['members_title'] = $user->members_title;
			$data['members_desc'] = $user->members_desc;
		}
		$this->form_validation->set_rules('members_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('members_desc', 'Description', 'trim|required');
		if ($this->form_validation->run() == true) {
			$idata['members_title'] = $this->input->post('members_title');
			$idata['members_desc'] = $this->input->post('members_desc');
			if ($ID) {
				$suc = $this->db->update('members', $idata, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'updated successfully !!';
					$this->session->set_userdata($sdata);
					redirect('members-info-list');
				}
			} else {
				$suc = $this->db->insert('members', $idata);
				if ($suc) {
					$sdata['messeage'] = 'Insert successfully !!';
					$this->session->set_userdata($sdata);
					redirect('add-members');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/Members/members_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function membersArea_info_list()
	{
		$data = array();
		$data['all_members_info'] = $this->Backend_model->members_info_text();
		$data['main_content'] = $this->load->view('pages/Members/members_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_members($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_members_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('members-info-list');
	}
	########################## Members End ###################

	########################## membersDsc start ###################
	public function membersDsc_edit_update($ID = null)
	{

		$data = array();
		$data['membersDsc_img'] = '';
		$data['membersDsc_name'] = '';
		$data['membersDsc_about'] = '';
		$data['membersDsc_aboutColor'] = '';
		if ($ID) {
			$data = array();
			$r = $this->db->query("select * FROM membersdsc where id = $ID ");
			$user = $r->row();
			$data['membersDsc_img'] = $user->membersDsc_img;
			$data['membersDsc_name'] = $user->membersDsc_name;
			$data['membersDsc_about'] = $user->membersDsc_about;
			$data['membersDsc_aboutColor'] = $user->membersDsc_aboutColor;
		}
		if (empty($_FILES['membersDsc_img']['name'])) {
			$this->form_validation->set_rules('membersDsc_img', 'Image', 'required');
		}
		$this->form_validation->set_rules('membersDsc_name', ' Title', 'trim|required');
		$this->form_validation->set_rules('membersDsc_about', 'Description', 'trim|required');
		$this->form_validation->set_rules('membersDsc_aboutColor', 'Text Color', 'trim|required');
		if ($this->form_validation->run() == true) {
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('membersDsc_img')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['membersDsc_img']);
				$idata['membersDsc_img'] = $sdata['file_name'];
			}
			$idata['membersDsc_name'] = $this->input->post('membersDsc_name');
			$idata['membersDsc_about'] = $this->input->post('membersDsc_about');
			$idata['membersDsc_aboutColor'] = $this->input->post('membersDsc_aboutColor');
			if ($ID) {
				$suc = $this->db->update('membersdsc', $idata, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'Data successfully update.. !!';
					$this->session->set_userdata($sdata);
					redirect('membersDsc-info-list');
				}
			} else {
				$suc = $this->db->insert('membersdsc', $idata);
				if ($suc) {
					$sdata['messeage'] = 'Insert successfully !!';
					$this->session->set_userdata($sdata);
					redirect('add-membersDsc');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/MembersDsc/membersDsc_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function edit_update_membersDsc()
	{
		$data = array();
		$data['all_membersDsc_info'] = $this->Backend_model->all_membersDsc_text();
		$data['main_content'] = $this->load->view('pages/MembersDsc/membersDsc_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_membersDsc($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_membersDsc_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('membersDsc-info-list');
	}
	########################## membersDsc end ###################

	########################## FeaturesDsc Start ###################
	public function video_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM video where id = $ID ");
		$user = $r->row();
		$data['video_title'] = $user->video_title;
		$data['video_icon'] = $user->video_icon;
		$data['video_link'] = $user->video_link;
		$this->form_validation->set_rules('video_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('video_icon', 'Icon', 'trim|required');
		$this->form_validation->set_rules('video_link', 'Link', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['video_title'] = $this->input->post('video_title');
			$data['video_icon'] = $this->input->post('video_icon');
			$data['video_link'] = $this->input->post('video_link');
			$suc = $this->db->update('video', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('video-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/Video/video_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function video_info_list()
	{
		$data = array();
		$data['video_info'] = $this->Backend_model->video_info_text();
		$data['main_content'] = $this->load->view('pages/Video/video_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## Vedio End ###################

	########################## Choose Plan Start ###################
	public function choosePlan_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM chooseplan where id = $ID ");
		$user = $r->row();
		$data['choosePlan_title'] = $user->choosePlan_title;
		$data['choosePlan_desc'] = $user->choosePlan_desc;
		$this->form_validation->set_rules('choosePlan_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('choosePlan_desc', 'Description', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['choosePlan_title'] = $this->input->post('choosePlan_title');
			$data['choosePlan_desc'] = $this->input->post('choosePlan_desc');
			$suc = $this->db->update('chooseplan', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('choosePlan-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/ChoosePlan/choosePlan_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function choosePlan_info_list()
	{
		$data = array();
		$data['choosePlan_info'] = $this->Backend_model->choosePlan_info_text();
		$data['main_content'] = $this->load->view('pages/ChoosePlan/choosePlan_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## Choose Plan End ###################

	########################## Plan Item Start ###################
	public function add_planItems($ID = null)
	{
		$data = array();
		$data['planItems_title'] = '';
		$data['planItems_img'] = '';
		$data['planItems_amount'] = '';
		$data['planItems_desc'] = '';
		$data['planItems_desc1'] = '';
		$data['planItems_desc2'] = '';
		$data['planItems_desc3'] = '';
		$data['planItems_btnTxt'] = '';
		$data['planItems_btnIcon'] = '';
		$data['planItems_btnLink'] = '';
		if ($ID) {
			$data = array();
			$r = $this->db->query("select * FROM planitems where id = $ID ");
			$user = $r->row();
			$data['planItems_title'] = $user->planItems_title;
			$data['planItems_img'] = $user->planItems_img;
			$data['planItems_amount'] = $user->planItems_amount;
			$data['planItems_desc'] = $user->planItems_desc;
			$data['planItems_desc1'] = $user->planItems_desc1;
			$data['planItems_desc2'] = $user->planItems_desc2;
			$data['planItems_desc3'] = $user->planItems_desc3;
			$data['planItems_btnTxt'] = $user->planItems_btnTxt;
			$data['planItems_btnIcon'] = $user->planItems_btnIcon;
			$data['planItems_btnLink'] = $user->planItems_btnLink;
		}
		$this->form_validation->set_rules('planItems_title', 'Title', 'trim|required');
		if (empty($_FILES['planItems_img']['name'])) {
			$this->form_validation->set_rules('planItems_img', 'Image', 'required');
		}
		if ($this->form_validation->run() == true) {
			$data['planItems_title'] = $this->input->post('planItems_title');
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('planItems_img')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['planItems_img']);
				$data['planItems_img'] = $sdata['file_name'];
			}
			$data['planItems_amount'] = $this->input->post('planItems_amount');
			$data['planItems_desc'] = $this->input->post('planItems_desc');
			$data['planItems_desc1'] = $this->input->post('planItems_desc1');
			$data['planItems_desc2'] = $this->input->post('planItems_desc2');
			$data['planItems_desc3'] = $this->input->post('planItems_desc3');
			$data['planItems_btnTxt'] = $this->input->post('planItems_btnTxt');
			$data['planItems_btnIcon'] = $this->input->post('planItems_btnIcon');
			$data['planItems_btnLink'] = $this->input->post('planItems_btnLink');

			if ($ID) {
				$suc = $this->db->update('planitems', $data, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'Data successfully update.. !!';
					$this->session->set_userdata($sdata);
					redirect('planItems-info-list');
				}
			} else {
				$suc = $this->db->insert('planitems', $data);
				if ($suc) {
					$sdata['messeage'] = ' Data successfully added.. !!';
					$this->session->set_userdata($sdata);
					redirect('add-planItems');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/PlanItems/planItems_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function planItems_info_list()
	{
		$data = array();
		$data['planItems_info'] = $this->Backend_model->planItems_info_text();
		$data['main_content'] = $this->load->view('pages/PlanItems/planItems_text_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_planItems($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_planitems_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('planItems-info-list');
	}
	########################## Plan Items End ###################


	########################## Products Start ###################
	public function products_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM products where id = $ID ");
		$user = $r->row();
		$data['products_title'] = $user->products_title;
		$data['products_desc'] = $user->products_desc;
		$this->form_validation->set_rules('products_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('products_desc', 'Description', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['products_title'] = $this->input->post('products_title');
			$data['products_desc'] = $this->input->post('products_desc');
			$suc = $this->db->update('products', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('products-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/Products/products_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function products_info_list()
	{
		$data = array();
		$data['products_info'] = $this->Backend_model->products_info_text();
		$data['main_content'] = $this->load->view('pages/Products/products_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## Choose Plan End ###################

	########################## Products Start ###################
	public function productsSlider_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM productsslider where id = $ID ");
		$user = $r->row();
		$data['productsSlider_desc'] = $user->productsSlider_desc;
		$data['productsSlider_img'] = $user->productsSlider_img;
		$data['productsSlider_name'] = $user->productsSlider_name;
		$data['productsSlider_Dev'] = $user->productsSlider_Dev;
		$this->form_validation->set_rules('productsSlider_desc', ' Description', 'trim|required');
		if (empty($_FILES['productsSlider_img']['name'])) {
			$this->form_validation->set_rules('productsSlider_img', 'Image', 'required');
		}
		$this->form_validation->set_rules('productsSlider_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('productsSlider_Dev', 'Position', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['productsSlider_desc'] = $this->input->post('productsSlider_desc');
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('productsSlider_img')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH . '/back-end/uploads/' . $data['productsSlider_img']);
				$data['productsSlider_img'] = $sdata['file_name'];
			}
			$data['productsSlider_name'] = $this->input->post('productsSlider_name');
			$data['productsSlider_Dev'] = $this->input->post('productsSlider_Dev');
			$suc = $this->db->update('productsslider', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('productsSlider-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/ProductsSlider/productsSlider_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function productsSlider_info_list()
	{
		$data = array();
		$data['productsSlider_info'] = $this->Backend_model->productsSlider_info_text();
		$data['main_content'] = $this->load->view('pages/ProductsSlider/productsSlider_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## Choose Plan End ###################

	########################## Question Start ###################
	public function add_askedQuestion()
	{
		$data['askedQuestion_col'] = '';
		$data['askedQuestion_colTxt'] = '';
		$this->form_validation->set_rules('askedQuestion_col', 'Latest Project Heading', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['askedQuestion_col'] = $this->input->post('askedQuestion_col');
			$data['askedQuestion_colTxt'] = $this->input->post('askedQuestion_colTxt');

			$suc = $this->db->insert('askedquestion', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-askedQuestion');
			}
		}
		$data['main_content'] = $this->load->view('pages/AskedQuestion/add-askedQuestion', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function askedQuestion_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM askedquestion where id = $ID ");
		$user = $r->row();
		$data['askedQuestion_title'] = $user->askedQuestion_title;
		$data['askedQuestion_desc'] = $user->askedQuestion_desc;
		$data['askedQuestion_btnTxt'] = $user->askedQuestion_btnTxt;
		$data['askedQuestion_btnLink'] = $user->askedQuestion_btnLink;
		$data['askedQuestion_col'] = $user->askedQuestion_col;
		$data['askedQuestion_colTxt'] = $user->askedQuestion_colTxt;
		$this->form_validation->set_rules('askedQuestion_title', ' Description', 'trim|required');
		$this->form_validation->set_rules('askedQuestion_desc', 'Name', 'trim|required');
		$this->form_validation->set_rules('askedQuestion_btnTxt', 'Position', 'trim|required');
		$this->form_validation->set_rules('askedQuestion_btnLink', 'Position', 'trim|required');
		$this->form_validation->set_rules('askedQuestion_col', 'Position', 'trim|required');
		$this->form_validation->set_rules('askedQuestion_colTxt', 'Position', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['askedQuestion_title'] = $this->input->post('askedQuestion_title');
			$data['askedQuestion_desc'] = $this->input->post('askedQuestion_desc');
			$data['askedQuestion_btnTxt'] = $this->input->post('askedQuestion_btnTxt');
			$data['askedQuestion_btnLink'] = $this->input->post('askedQuestion_btnLink');
			$data['askedQuestion_col'] = $this->input->post('askedQuestion_col');
			$data['askedQuestion_colTxt'] = $this->input->post('askedQuestion_colTxt');
			$suc = $this->db->update('askedquestion', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('askedQuestion-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/AskedQuestion/askedQuestion_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function askedQuestion_info_list()
	{
		$data = array();
		$data['askedQuestion_info'] = $this->Backend_model->askedQuestion_info_text();
		$data['main_content'] = $this->load->view('pages/AskedQuestion/askedQuestion_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function delete_aksedQuestion($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_aksedQuestion_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('askedQuestion-info-list');
	}

	########################## Choose Plan End ###################


	########################## Customers Start ###################
	public function add_customers()
	{
		$sdata = array();
		$data['customers_img1'] = '';
		if (!empty($_FILES['customers_img1']['name'])) {
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('customers_img1')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['customers_img1']);
				$data['customers_img1'] = $sdata['file_name'];
			}
			$suc = $this->db->insert('customers', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-customers');
			}
		}
		$data['main_content'] = $this->load->view('pages/Customers/add_customers', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function customers_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM customers where id = $ID ");
		$user = $r->row();
		$data['customers_text1'] = $user->customers_text1;
		$data['customers_text2'] = $user->customers_text2;
		$data['customers_text3'] = $user->customers_text3;
		$data['customers_img1'] = $user->customers_img1;
		$this->form_validation->set_rules('customers_text1', 'Text', 'trim|required');
		if (empty($_FILES['customers_img1']['name'])) {
			$this->form_validation->set_rules('customers_img1', 'Image 1', 'required');
		}
		if ($this->form_validation->run() == true) {
			$data['customers_text1'] = $this->input->post('customers_text1');
			$data['customers_text2'] = $this->input->post('customers_text2');
			$data['customers_text3'] = $this->input->post('customers_text3');
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('customers_img1')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				unlink(FCPATH . '/back-end/uploads/' . $data['customers_img1']);
				$data['customers_img1'] = $sdata['file_name'];
			}
			$suc = $this->db->update('customers', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('customers-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/Customers/customers_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function customers_info_list()
	{
		$data = array();
		$data['customers_info'] = $this->Backend_model->customers_info_text();
		$data['main_content'] = $this->load->view('pages/Customers/customers_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function customers_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_customers_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('customers-info-list');
	}

	########################## Customers End ###################


	########################## Products Start ###################
	public function newsArea_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM newsarea where id = $ID ");
		$user = $r->row();
		$data['newsArea_title'] = $user->newsArea_title;
		$data['newsArea_desc'] = $user->newsArea_desc;
		$this->form_validation->set_rules('newsArea_title', ' Title', 'trim|required');
		$this->form_validation->set_rules('newsArea_desc', 'Description', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['newsArea_title'] = $this->input->post('newsArea_title');
			$data['newsArea_desc'] = $this->input->post('newsArea_desc');
			$suc = $this->db->update('newsarea', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('news-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/News/news_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function newsArea_info_list()
	{
		$data = array();
		$data['newsArea_info'] = $this->Backend_model->news_info_text();
		$data['main_content'] = $this->load->view('pages/News/news_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## Choose Plan End ###################

	########################## newsCards Start ###################
	public function newsCards_edit_update($ID = null)
	{
		$data = array();
		$data['newsCards_img'] = '';
		$data['newsCards_title'] = '';
		$data['newsCards_date'] = '';
		if ($ID) {
			$r = $this->db->query("select * FROM newscards where id = $ID ");
			$user = $r->row();
			$data['newsCards_img'] = $user->newsCards_img;
			$data['newsCards_title'] = $user->newsCards_title;
			$data['newsCards_date'] = $user->newsCards_date;
		}
		if (empty($_FILES['newsCards_img']['name'])) {
			$this->form_validation->set_rules('newsCards_img', 'Image', 'required');
		}
		$this->form_validation->set_rules('newsCards_title', 'Title', 'trim|required');
		if ($this->form_validation->run() == true) {
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('newsCards_img')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['newsCards_img']);
				$data['newsCards_img'] = $sdata['file_name'];
			}
			$data['newsCards_title'] = $this->input->post('newsCards_title');
			$data['newsCards_date'] = $this->input->post('newsCards_date');

			if ($ID) {
				$suc = $this->db->update('newscards', $data, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'Data successfully update.. !!';
					$this->session->set_userdata($sdata);
					redirect('newsCards-info-list');
				}
			} else {
				$suc = $this->db->insert('newscards', $data);
				if ($suc) {
					$sdata['messeage'] = ' Data successfully added.. !!';
					$this->session->set_userdata($sdata);
					redirect('add-newsCards');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/NewsCards/newsCards_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function newsCards_info_list()
	{
		$data = array();
		$data['newsCards_info'] = $this->Backend_model->newsCards_info_text();
		$data['main_content'] = $this->load->view('pages/NewsCards/newsCards_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function newsCards_Delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->delete_newsCards_Delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('newsCards-info-list');
	}

	########################## newsCards End ###################
	########################## newsCardscolumn Start ###################
	public function newsCardsColumn_edit_update($ID = null)
	{

		$data = array();
		$data['newsCardsCol_title'] = '';
		$data['newsCardsCol_date'] = '';
		if ($ID) {
			$data = array();
			$r = $this->db->query("select * FROM newscardscol where id = $ID ");
			$user = $r->row();
			$data['newsCardsCol_title'] = $user->newsCardsCol_title;
			$data['newsCardsCol_date'] = $user->newsCardsCol_date;
		}
		$this->form_validation->set_rules('newsCardsCol_title', 'Title', 'trim|required');
		$this->form_validation->set_rules('newsCardsCol_date', 'Date', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['newsCardsCol_title'] = $this->input->post('newsCardsCol_title');
			$data['newsCardsCol_date'] = $this->input->post('newsCardsCol_date');
			if ($ID) {
				$suc = $this->db->update('newscardscol', $data, array('id' => $ID));
				if ($suc) {
					$sdata['messeage'] = 'Data successfully update.. !!';
					$this->session->set_userdata($sdata);
					redirect('newsCardsCol-info-list');
				}
			} else {
				$suc = $this->db->insert('newscardscol', $data);
				if ($suc) {
					$sdata['messeage'] = ' Data successfully added.. !!';
					$this->session->set_userdata($sdata);
					redirect('add-newsCardsCol');
				}
			}
		}
		$data['main_content'] = $this->load->view('pages/NewsCardsColumn/newsCardsColumn_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function newsCardsColumn_info_list()
	{
		$data = array();
		$data['newsCardsCol_info'] = $this->Backend_model->newsCardsCol_info_text();
		$data['main_content'] = $this->load->view('pages/NewsCardsColumn/newsCardsColumn_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function newsCardsColumn_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->newsCardsColumn_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('newsCardsCol-info-list');
	}
	########################## newsCards End ###################
	########################## questionFooter Start ###################
	public function questionFooter_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM questionfooter where id = $ID ");
		$user = $r->row();
		$data['questionFooter_title'] = $user->questionFooter_title;
		$data['questionFooter_btnTxt'] = $user->questionFooter_btnTxt;
		$data['questionFooter_icon'] = $user->questionFooter_icon;
		$data['questionFooter_link'] = $user->questionFooter_link;
		$this->form_validation->set_rules('questionFooter_title', 'Title', 'trim|required');
		$this->form_validation->set_rules('questionFooter_btnTxt', 'Date', 'trim|required');
		$this->form_validation->set_rules('questionFooter_icon', 'Date', 'trim|required');
		$this->form_validation->set_rules('questionFooter_link', 'Date', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['questionFooter_title'] = $this->input->post('questionFooter_title');
			$data['questionFooter_btnTxt'] = $this->input->post('questionFooter_btnTxt');
			$data['questionFooter_icon'] = $this->input->post('questionFooter_icon');
			$data['questionFooter_link'] = $this->input->post('questionFooter_link');
			$suc = $this->db->update('questionfooter', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('questionFooter-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/QuestionFooter/questionFooter_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function questionFooter_info_list()
	{
		$data = array();
		$data['questionFooter_info'] = $this->Backend_model->questionFooter_info_text();
		$data['main_content'] = $this->load->view('pages/QuestionFooter/questionFooter_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	########################## newsCards End ###################


	########################## Address Footer Start ###################
	public function add_addressFooter()
	{
		$data = array();
		$data['addressFooter_country'] = '';
		$this->form_validation->set_rules('addressFooter_country', 'Address', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['addressFooter_country'] = $this->input->post('addressFooter_country');
			$suc = $this->db->insert('addressfooter', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-addressFooter');
			}
		}
		$data['main_content'] = $this->load->view('pages/AddressFooter/add_addressFooter', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function addressFooter_edit_update($ID = null)
	{
		$data = array();
		$r = $this->db->query("select * FROM addressfooter where id = $ID ");
		$user = $r->row();
		$data['addressFooter_logo'] = $user->addressFooter_logo;
		$data['addressFooter_country'] = $user->addressFooter_country;
		$this->form_validation->set_rules('addressFooter_country', 'Date', 'trim|required');
		if ($this->form_validation->run() == true) {
			$config['upload_path']          = 'back-end/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('addressFooter_logo')) {
				$this->upload->display_errors();
			} else {
				$sdata = $this->upload->data();
				@unlink(FCPATH . '/back-end/uploads/' . $data['addressFooter_logo']);
				$data['addressFooter_logo'] = $sdata['file_name'];
			}
			$data['addressFooter_country'] = $this->input->post('addressFooter_country');
			$suc = $this->db->update('addressfooter', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('addressFooter-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/AddressFooter/addressFooter_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function addressFooter_info_list()
	{
		$data = array();
		$data['addressFooter_info'] = $this->Backend_model->addressFooter_info_text();
		$data['main_content'] = $this->load->view('pages/AddressFooter/addressFooter_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function addressFooter_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->addressFooter_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('addressFooter-info-list');
	}
	########################## Address Footer End ###################
	########################## Company Footer Start ###################
	public function add_company()
	{
		$data = array();
		$data['Company_text1'] = '';
		$this->form_validation->set_rules('Company_text1', 'Company Menu', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['Company_text1'] = $this->input->post('Company_text1');
			$suc = $this->db->insert('company', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-company');
			}
		}
		$data['main_content'] = $this->load->view('pages/Company/add_company', $data, true);
		$this->load->view('dashboard', $data);
	}

	public function company_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM company where id = $ID ");
		$user = $r->row();
		$data['Company_title'] = $user->Company_title;
		$data['Company_text1'] = $user->Company_text1;
		// $this->form_validation->set_rules('Company_title', 'Countery', 'trim|required');
		$this->form_validation->set_rules('Company_text1', 'Cell', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['Company_title'] = $this->input->post('Company_title');
			$data['Company_text1'] = $this->input->post('Company_text1');
			$suc = $this->db->update('company', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('company-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/Company/company_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function company_info_list()
	{
		$data = array();
		$data['company_info'] = $this->Backend_model->company_info_text();
		$data['main_content'] = $this->load->view('pages/Company/company_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function company_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->company_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('company-info-list');
	}
	##########################Company Footer End ###################
	########################## Services Footer Start ###################
	public function add_services()
	{
		$data = array();
		$data['services_text1'] = '';
		$this->form_validation->set_rules('services_text1', 'Servives Menu', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['services_text1'] = $this->input->post('services_text1');
			$suc = $this->db->insert('services', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add_services');
			}
		}
		$data['main_content'] = $this->load->view('pages/Services/add_services', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function services_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM services where id = $ID ");
		$user = $r->row();
		$data['services_title'] = $user->services_title;
		$data['services_text1'] = $user->services_text1;
		// $this->form_validation->set_rules('services_title', 'Countery', 'trim|required');
		$this->form_validation->set_rules('services_text1', 'Cell', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['services_title'] = $this->input->post('services_title');
			$data['services_text1'] = $this->input->post('services_text1');
			$suc = $this->db->update('services', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('services-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/Services/services_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function services_info_list()
	{
		$data = array();
		$data['services_info'] = $this->Backend_model->services_info_text();
		$data['main_content'] = $this->load->view('pages/Services/services_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function services_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->services_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('services-info-list');
	}
	########################## Services Footer End ###################
	########################## Quick Link Footer Start ###################
	public function add_quickLink()
	{
		$data = array();
		$data['quickLink_text1'] = '';
		$this->form_validation->set_rules('quickLink_text1', 'Quick Link Menu', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['quickLink_text1'] = $this->input->post('quickLink_text1');
			$suc = $this->db->insert('quicklink', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-quickLink');
			}
		}
		$data['main_content'] = $this->load->view('pages/QuickLink/add_quickLink', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function quickLink_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM quicklink where id = $ID ");
		$user = $r->row();
		$data['quickLink_title'] = $user->quickLink_title;
		$data['quickLink_text1'] = $user->quickLink_text1;
		$this->form_validation->set_rules('quickLink_text1', 'Cell', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['quickLink_title'] = $this->input->post('quickLink_title');
			$data['quickLink_text1'] = $this->input->post('quickLink_text1');
			$suc = $this->db->update('quicklink', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('quickLink-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/QuickLink/quickLink_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function quickLink_info_list()
	{
		$data = array();
		$data['quickLink_info'] = $this->Backend_model->quickLink_info_text();
		$data['main_content'] = $this->load->view('pages/QuickLink/quickLink_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function quickLink_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->quickLink_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('quickLink-info-list');
	}
	##########################Quick Link Footer End ###################
	########################## Media Footer Start ###################
	public function add_mediaFooter()
	{
		$data = array();
		$data['mediaFooter_icon1'] = '';
		$this->form_validation->set_rules('mediaFooter_icon1', 'Quick Link Menu', 'trim|required');
		if ($this->form_validation->run() == true) {
			$data['mediaFooter_icon1'] = $this->input->post('mediaFooter_icon1');
			$suc = $this->db->insert('mediafooter', $data);
			if ($suc) {
				$sdata['messeage'] = ' Data successfully added.. !!';
				$this->session->set_userdata($sdata);
				redirect('add-mediaFooter');
			}
		}
		$data['main_content'] = $this->load->view('pages/MediaFooter/add_mediaFooter', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function mediaFooter_edit_update($ID)
	{
		$data = array();
		$r = $this->db->query("select * FROM mediafooter where id = $ID ");
		$user = $r->row();
		$data['mediaFooter_text'] = $user->mediaFooter_text;
		$data['mediaFooter_textColor'] = $user->mediaFooter_textColor;
		$data['mediaFooter_icon1'] = $user->mediaFooter_icon1;
		// $this->form_validation->set_rules('mediaFooter_text', 'Text', 'trim|required');
		// $this->form_validation->set_rules('mediaFooter_textColor', 'Text', 'trim|required');
		$this->form_validation->set_rules('mediaFooter_icon1', 'Icon1', 'trim|required');

		if ($this->form_validation->run() == true) {
			$data['mediaFooter_text'] = $this->input->post('mediaFooter_text');
			$data['mediaFooter_textColor'] = $this->input->post('mediaFooter_textColor');
			$data['mediaFooter_icon1'] = $this->input->post('mediaFooter_icon1');

			$suc = $this->db->update('mediafooter', $data, array('id' => $ID));
			if ($suc) {
				$sdata['messeage'] = 'Data successfully update.. !!';
				$this->session->set_userdata($sdata);
				redirect('mediaFooter-info-list');
			}
		}
		$data['main_content'] = $this->load->view('pages/MediaFooter/mediaFooter_edit_update', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function mediaFooter_info_list()
	{
		$data = array();
		$data['mediaFooter_info'] = $this->Backend_model->mediaFooter_info_text();
		$data['main_content'] = $this->load->view('pages/MediaFooter/mediaFooter_edit_update_list', $data, true);
		$this->load->view('dashboard', $data);
	}
	public function mediaFooter_delete($user_id)
	{
		$sdata = array();
		$this->Backend_model->mediaFooter_delete_from_db($user_id);
		$sdata['messeage'] = 'Data successfully Delete..!!';
		$this->session->set_userdata($sdata);
		redirect('mediaFooter-info-list');
	}
	##########################Media Footer End ###################





}
