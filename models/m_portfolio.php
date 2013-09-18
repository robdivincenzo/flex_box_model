<?php
/**
 * This is the model holding "portfolio" functions for the site.
 * 
 * @author Rob DiVincenzo
 * 
 */
class M_portfolio extends CI_Model{
	/**
	 * Gets the portfolio data from tbl_portfolio. Returns as an array.
	 * 
	 * @author Rob DiVincenzo
	 * 
	 */
	public function get_portfolio(){
		$this->db->select("*");
		$this->db->from("tbl_portfolio");
		$query = $this->db->get();
		return $query->result_array();
	}
	/**
	 * Gets the category label (for use in a header for example) from tbl_portfolio. Returns as an array.
	 * 
	 * @author Rob DiVincenzo
	 * 
	 */
	public function get_category_label($url=''){
		$this->db->select("label");
		$this->db->from("tbl_portfolio");
		$this->db->where('url',$url);
		$query = $this->db->get();
		return $query->result_array();
	}
	/**
	 * Gets all projects from tbl_project associated with a certain portfolio category. Returns as an array.
	 * 
	 * @author Rob DiVincenzo
	 * 
	 */
	public function get_projects_from_category($category){
		$this->db->select("tbl_project.*");
		$this->db->from("tbl_project");
		$this->db->join('tbl_portfolio','tbl_portfolio.pk_portfolio_id= tbl_project.fk_portfolio_id');
		$this->db->where('tbl_portfolio.url',$category);
		$query = $this->db->get();
		return $query->result_array();
	}
}