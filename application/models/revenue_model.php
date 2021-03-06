<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Revenue_model extends CI_Model{

    function __construct() {

        //parent::Model();
		$this->eigreports = $this->load->database('eigreports', TRUE);
		$this->load->library('table');
    }

    function action_type_wise_revenue(){
		
		$query = "SELECT month(date) as month,
                round(sum(add_new_revenue-add_new_tax), 0) as new_revenue
                FROM hourly_revenue_product where date between '2015-01-01' and last_day('2015-12-31')
                group by month(date)";

		$result = $this->eigreports->query($query);
		
		foreach($result->result_array() as $row){
			
			$data[] = $row['new_revenue'];
			
		}
		
		$data = "{data: [" .implode(",", $data) . "]}";
		
		
		return $data;
		
	}

	function product_wise_revenue(){

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

	function average_revenue_per_domain(){

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