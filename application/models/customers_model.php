<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model{

    function __construct() {

        //parent::Model();
		$this->eigreports = $this->load->database('eigreports', TRUE);
		$this->load->library('table');
    }

    function signup_payup(){
		
		$query = "SELECT month(date) as month,
                round(sum(add_new_revenue-add_new_tax), 0) as new_revenue
                FROM hourly_revenue_product where date between '2016-01-1' and last_day('2016-12-31')
                group by month(date)";

		$result = $this->eigreports->query($query);
		
		foreach($result->result_array() as $row){
			
			$data[] = $row['new_revenue'];
			
		}
		
		$data = "{data: [" .implode(",", $data) . "]}";
		
		
		return $data;
		
	}

	function citywise_distribution(){

		$query = "SELECT month(date) as month,
                round(sum(add_new_revenue-add_new_tax), 0) as new_revenue
                FROM hourly_revenue_product where date between '2016-01-1' and last_day('2016-12-31')
                group by month(date)";

		$result = $this->eigreports->query($query);

		foreach($result->result_array() as $row){

			$data[] = $row['new_revenue'];

		}

		$data = "{data: [" .implode(",", $data) . "]}";


		return $data;

	}
    
}