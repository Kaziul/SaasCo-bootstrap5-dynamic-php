<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
		##################### head ##############
		// $querys = $this->db->query("SELECT * FROM menu ");
		// $id2 = $querys->row();
		// $data['logo'] = $id2->logo;
		// $data['btn_txt'] = $id2->btn_txt;
		// $data['btn_icon'] = $id2->btn_icon;
		// $data['menus'] = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();
		// // echo $this->db->last_query(); exit;
		// foreach ($data['menus'] as $key => $value) {
		//     $data['menus'][$key]->submenu = $this->db->where('parentId', $value->id)->order_by('id', 'ASC')->get('menu')->result();
		// }
		$this->load->model('Menu_header_Model');
		$data['header_elm'] = $this->Menu_header_Model->header_elements();


		//  print("<pre>".print_r($data['header_elm'],true)."</pre>");  //exit; 


		##################### head card ##############
		$data['headcardDynamic'] = $this->db->get('head_app')->result();
		##################### Features ##############
		$data['featuresDynamic'] = $this->db->get('features')->result();
		##################### FeaturesDsc ##############
		$data['featuresDscDynamic'] = $this->db->get('featuresdsc')->result();
		##################### User Interface ##############
		$data['userInterfaceDynamic'] = $this->db->get('user_interface')->result();
		#####################  Discuss  ##############
		$data['discussDynamic'] = $this->db->get('discuse')->result();
		$data['discuse'] = $this->db->where('id', 0)->order_by('id', 'ASC')->get('discuse')->result();

		##################### Members Area ##############
		$query = $this->db->query("SELECT * FROM members ");
		$data['membersDynamic'] = $query->result_array();
		##################### MembersDsc Area ##############
		$query = $this->db->query("SELECT * FROM membersdsc ");
		$data['membersDscDynamic'] = $query->result_array();
		##################### Video Area ##############
		$query = $this->db->query("SELECT * FROM video ");
		$data['videoDynamic'] = $query->result_array();
		##################### Choose Plan Area ##############
		$query = $this->db->query("SELECT * FROM chooseplan ");
		$data['chooseplanDynamic'] = $query->result_array();
		##################### Plan Item Area ##############
		$query = $this->db->query("SELECT * FROM planitems ");
		$data['planitemsDynamic'] = $query->result_array();
		##################### Products Area ##############
		$query = $this->db->query("SELECT * FROM products ");
		$data['productsDynamic'] = $query->result_array();
		##################### Products Slider Area ##############
		$query = $this->db->query("SELECT * FROM productsSlider ");
		$data['productsSliderDynamic'] = $query->result_array();
		##################### Asked Question Area ##############
		$query4 = $this->db->query("SELECT * FROM askedquestion ORDER BY id ASC LIMIT 1");
		$id3 = $query4->row();
		$data['askedQuestion_title'] = $id3->askedQuestion_title;
		$data['askedQuestion_desc'] = $id3->askedQuestion_desc;
		$data['askedQuestion_btnTxt'] = $id3->askedQuestion_btnTxt;
		$data['askedQuestion_btnLink'] = $id3->askedQuestion_btnLink;
		$query = $this->db->query("SELECT * FROM askedquestion ");
		$data['askedQuestionDynamic'] = $query->result_array();
		##################### Customers Area ##############
		$query = $this->db->query("SELECT * FROM customers ");
		$data['customersDynamic'] = $query->result_array();
		$query22 = $this->db->query("SELECT * FROM customers ");
		$id22 = $query22->row();
		$data['customers_text1'] = $id22->customers_text1;
		$data['customers_text2'] = $id22->customers_text2;
		$data['customers_text3'] = $id22->customers_text3;
		##################### News Area ##############
		$query = $this->db->query("SELECT * FROM newsarea ");
		$data['newsDynamic'] = $query->result_array();
		##################### NewsCards Area ##############
		$query = $this->db->query("SELECT * FROM newscards ");
		$data['newsCardsDynamic'] = $query->result_array();
		##################### NewsCards Area ##############
		$query = $this->db->query("SELECT * FROM newscardscol ");
		$data['newsCardsColDynamic'] = $query->result_array();
		##################### questionFooter Area ##############
		$query = $this->db->query("SELECT * FROM questionfooter ");
		$data['questionFooterDynamic'] = $query->result_array();
		##################### questionFooter Area ##############
		$query = $this->db->query("SELECT * FROM addressfooter ");
		$data['addressFooterDynamic'] = $query->result_array();
		$query44 = $this->db->query("SELECT * FROM addressfooter ORDER BY id ASC LIMIT 1");
		$id33 = $query44->row();
		$data['addressFooter_logo'] = $id33->addressFooter_logo;
		##################### questionFooter Area ##############
		$query = $this->db->query("SELECT * FROM company ");
		$data['companyDynamic'] = $query->result_array();
		$query45 = $this->db->query("SELECT * FROM company ORDER BY id ASC LIMIT 1");
		$id34 = $query45->row();
		$data['Company_title'] = $id34->Company_title;
		##################### Services Area ##############
		$query = $this->db->query("SELECT * FROM services ");
		$data['servicesDynamic'] = $query->result_array();
		$query46 = $this->db->query("SELECT * FROM services ORDER BY id ASC LIMIT 1");
		$id35 = $query46->row();
		$data['services_title'] = $id35->services_title;
		##################### quicklink Area ##############
		$query = $this->db->query("SELECT * FROM quicklink ");
		$data['quicklinkDynamic'] = $query->result_array();
		$query47 = $this->db->query("SELECT * FROM quicklink ORDER BY id ASC LIMIT 1");
		$id37 = $query47->row();
		$data['quickLink_title'] = $id37->quickLink_title;
		##################### mediaFooter Area ##############
		$query = $this->db->query("SELECT * FROM mediafooter ");
		$data['mediafooterDynamic'] = $query->result_array();
		$query47 = $this->db->query("SELECT * FROM mediafooter ORDER BY id ASC LIMIT 1");
		$id37 = $query47->row();
		$data['mediaFooter_text'] = $id37->mediaFooter_text;
		$data['mediaFooter_textColor'] = $id37->mediaFooter_textColor;


		$this->load->view('index', $data);
	}
}
