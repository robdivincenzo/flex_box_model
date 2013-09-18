<?php
/**
 * This is the model holding "team" functions for the site.
 * 
 * @author Rob DiVincenzo
 * 
 */
class M_team extends CI_Model{
	/**
	 * Gets the team data from tbl_team. Returns as an array.
	 * 
	 * @author Rob DiVincenzo
	 * 
	 */
	public function get_team(){
		$this->db->select("*");
		$this->db->from("tbl_team");
		$this->db->join("tbl_user","tbl_team.fk_user_id = tbl_user.pk_user_id");
		$this->db->join("lu_title","tbl_team.fk_title_id = lu_title.pk_title_id");
		$query=$this->db->get();
		$team_array= $query->result_array();
		return $team_array;
	}
	/**
	 * Holds the logic and formatting for the team data for the team view (CI best practices to keep
	 * logic inside model. Returns as an array.
	 * 
	 * @author Rob DiVincenzo
	 * 
	 */
	public function get_formatted_team(){
		$index=0;
		$team_array=$this->get_team();
		foreach($team_array as $member){
			$format_member_array[$index]['industry_experience']=empty($member['industry_experience'])?"":"<p>Industry Experience: ".$member['industry_experience']."</p>";
			$format_member_array[$index]['programming_languages']=empty($member['programming_languages'])?"":"<p>Languages: ".$member['programming_languages']."</p>";
			$format_member_array[$index]['databases']=empty($member['databases'])?"":"<p>Databases: ".$member['databases']."</p>";
			$format_member_array[$index]['frameworks_and_libraries']=empty($member['frameworks_and_libraries'])?"":"<p>Frameworks/Libraries: ".$member['frameworks_and_libraries']."</p>";
			$format_member_array[$index]['media_production']=empty($member['media_production'])?"":"<p>Media Production: ".$member['media_production']."</p>";
			$format_member_array[$index]['other']=empty($member['other'])?"":"<p>Other: ".$member['other']."</p>";
			$format_member_array[$index]['name']=$member['first_name'].' '.$member['last_name'];
			$format_member_array[$index]['title']=$member['title'];
			$format_member_array[$index]['role']=$member['role'];
			$format_member_array[$index]['biography']=$member['biography'];
			$index++;
		}
		return $format_member_array;
	}
}