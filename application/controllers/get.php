<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

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
	public function metodo($id)
	{
		// $request = $this->input->get('http://logistics.vtexcommercestable.com.br/api/logistics/pvt/inventory/skus/1098?an=doceflor');
		// echo json_encode($request);
		// Get cURL resource
	    $curl = curl_init();
	    // Set some options - we are passing in a useragent too here
	    curl_setopt_array($curl, array(
	        CURLOPT_RETURNTRANSFER => 1,
	        CURLOPT_URL => 'http://logistics.vtexcommercestable.com.br/api/logistics/pvt/inventory/skus/'. $id .'?an=doceflor',
	        CURLOPT_USERAGENT => 'Codular Sample cURL Request',
	        CURLOPT_HTTPHEADER => array(
	        	'Content-Type: application/json; charset=utf-8',
	        	'Accept: application/json',
	        	'X-VTEX-API-AppKey: vtexappkey-doceflor-TYMBJC',
	        	'X-VTEX-API-AppToken: SWQWBWQARLAENSCIHSCVHYTWWFXPVVHMMRANMPPTYCRLACPBYPSKYEGUDTAVYAFWDNRVSOVSDIWEGIWUQWRFDWOILFKTOUUYXVHMKUIJUZHPHBOUXGECJZSGZJKNECDJ'
	        )
	    ));
	    header('Content-Type: application/json');
	    // Send the request & save response to $resp
	    $resp = curl_exec($curl);
	    // Close request to clear up some resources
	    curl_close($curl);

	    echo $resp;
	}
}
