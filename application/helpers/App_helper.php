<?php

function getCodeCustomer(){
		//generate kode

		//periksa di database, jika > 0 generate lagi

		//$a = substr(md5(rand(0,987767855675142435)),6);

		$ci=& get_instance();
	    $ci->load->database(); 

		$a = substr(uniqid(),6);
		//$this->db->where();
		while($ci->db->get_where('customer',array('kodecustomer'=>$a))->num_rows() > 0){
			return $a;
		}

			return $a;


	}


function generateSupplier(){
		//generate kode

		//periksa di database, jika > 0 generate lagi

		//$a = substr(md5(rand(0,987767855675142435)),6);

		$ci=& get_instance();
	    $ci->load->database(); 

		$a = substr(uniqid(),1);
		//$this->db->where();
		while($ci->db->get_where('supplier',array('kodesupplier'=>$a))->num_rows() > 0){
			return $a;
		}

			return $a;


	}


function generateKdJual(){
		//generate kode

		//periksa di database, jika > 0 generate lagi

		//$a = substr(md5(rand(0,987767855675142435)),6);

		$ci=& get_instance();
	    $ci->load->database(); 

		$a = substr(md5(uniqid()),18);
		//$this->db->where();
		while($ci->db->get_where('supplier',array('kodesupplier'=>$a))->num_rows() > 0){
			return $a;
		}

			return $a;


	}

	function generateKodebrg(){

			$ci=& get_instance();
	    	$ci->load->database(); 

			$a = substr(uniqid(),2);
			//$this->db->where();
			while($ci->db->get_where('barang',array('kodebarang'=>$a))->num_rows() > 0){
					return $a;
				}

				return $a;
	}

function generateInvoice(){
		$ci=& get_instance();
	    $ci->load->database(); 

		$a = substr(uniqid(),2);
		//$this->db->where();
		while($ci->db->get_where('pembelian',array('no_invoice'=>$a))->num_rows() > 0){
			return $a;
		}

			return $a;

}
