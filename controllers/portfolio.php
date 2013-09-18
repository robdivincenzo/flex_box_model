<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//disallow direct file access via URL
/**
 * This is the controller for the "Portfolio" sections of the site. The default function is "load_portfolio" unless
 * a different parameter is called.
 * 
 * @author Rob DiVincenzo
 * 
 */
class Portfolio extends Site_Controller {
	/**
	*  Default landing for the "Portfolio" page. Will call the load_portfolio function.
	*
	* @author Rob DiVincenzo
	*
	*/
	public function index(){
		$this->load_portfolio();
	}
	/**
	* Will show the about default portfolio page. Private to prevent direct URL access (for URL aesthetics).
	*
	* @author Rob DiVincenzo
	* 
	*/
	private function load_portfolio(){
		//load external model (functions)
		$this->load->model('m_portfolio');
		//set page specific view data
		$data['title']='Example Page Title';
		$data['portfolio']=$this->m_portfolio->get_portfolio();
		$data['site_type']=$this->get_site_type();
		$data['twitter_widget']=$this->load->view('v_twitter_widget','',TRUE);
		//load views
		$this->load->view('v_header',$data);
		$this->load->view($data['site_type'].'/portfolio/v_portfolio',$data);
		$this->load->view('v_footer',$data);
	}
	/**
	*  Landing for the web_development URL. Will call a generalized load portfolio function with web_development parameter
	*
	* @author Rob DiVincenzo
	*
	*/
	public function web_development(){
		//set page specific view data
		$data['title']='Example Page Title';
		//call a generalized load category function with parameters to grab data specific to the web_development category.
		$this->load_portfolio_category('web_development',$data);
	}
	/**
	*  Landing for the video_production URL. Will call a generalized load portfolio function with video_production parameter
	*
	* @author Rob DiVincenzo
	*
	*/
	public function video_production(){
		//set page specific view data
		$data['title']='Example Page Title';
		//call a generalized load category function with parameters to grab data specific to the video_production category.
		$this->load_portfolio_category('video_production',$data);
	}
	/**
	* Will show a specified portfolio category page. Private to prevent direct URL access (for URL aesthetics and
	* because of mandatory parameters).
	*
	* @author Rob DiVincenzo
	* 
	*/
	private function load_portfolio_category($category,$data){
		//load external model
		$this->load->model('m_portfolio');
		//set page specific view data
		$data['site_type']=$this->get_site_type();
		$data['category_label']=$this->m_portfolio->get_category_label($category);
		$data['projects']=$this->m_portfolio->get_projects_from_category($category);
		//load views
		$this->load->view('v_header',$data);
		$this->load->view($data['site_type'].'/portfolio/v_portfolio_category',$data);
		$this->load->view('v_footer',$data);
	}
}