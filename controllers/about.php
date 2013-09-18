<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//disallow direct file access via URL
/**
 * This is the controller for the "About" sections of the site.
 * 
 * @author Rob DiVincenzo
 * 
 */
class About extends Site_Controller {
	/**
	*  Default landing for About. Will call the show_about function.
	*
	* @author Rob DiVincenzo
	*
	*/
	public function index(){
		$this->show_about();
	}
	/**
	* Will show the about default about page. Private to prevent direct URL access (for URL aesthetics).
	*
	* @author Rob DiVincenzo
	* 
	*/
	private function show_about(){
		//set page specific view data
		$data['title']='Site Title';
		$data['site_type']=$this->get_site_type();
		//load views
		$this->load->view('v_header',$data);
		$this->load->view($data['site_type'].'/about/v_about',$data);
		$this->load->view('v_footer',$data);
	}
	/**
	* Will show the our team page.
	*
	* @author Rob DiVincenzo
	*
	*/
	public function our_team($team_member=''){
		//load external model (functions)
		$this->load->model('m_team');
		//set page specific view data
		$data['title']='Site Title';
		$data['team']=$this->m_team->get_formatted_team();
		$data['site_type']=$this->get_site_type();
		//load views
		$this->load->view('v_header',$data);
		$this->load->view($data['site_type'].'/about/v_team',$data);
		$this->load->view('v_footer',$data);
	}
}