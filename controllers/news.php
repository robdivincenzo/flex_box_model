<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//disallow direct file access via URL
/**
 * This is the controller for the "News" sections of the site. It is also the default controller called.
 * The default function is "show_home" unless a different parameter is called.
 * 
 * @author Rob DiVincenzo
 * 
 */
class News extends Site_Controller {
	/**
	*  Default landing for the website. Will call the show_home function.
	*
	* @author Rob DiVincenzo
	*
	*/
	public function index(){
		$this->show_home();
	}
	/**
	* Will show the about default home page (news/wordpress blog feed). Private to prevent direct URL access (for URL aesthetics).
	*
	* @author Rob DiVincenzo
	* 
	*/
	private function show_home(){
		//set page specific view data
		$data['title']='Site Title';
		$data['site_type']=$this->get_site_type();
		$data['twitter_widget']=$this->load->view('v_twitter_widget','',TRUE);
		//load views
		$this->load->view('v_header',$data);
		$this->load->view($data['site_type'].'/home/v_home',$data);
		$this->load->view('v_footer',$data);
	}
}