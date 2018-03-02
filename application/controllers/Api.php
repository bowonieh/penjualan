<?php 

class Api extends CI_CONTROLLER{
	function __construct(){
		parent::__construct();
	}

	
  function get_supplier(){
    //$this->load->model('birds_model');
    //get_supplier($q,$field,$table,$label,$value){
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->appmodel->get_autocomplete($q,'namasupplier','supplier','namasupplier','kodesupplier');
    }
  }
  function get_customer(){
    //$this->load->model('birds_model');
    //get_supplier($q,$field,$table,$label,$value){
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->appmodel->get_autocomplete($q,'namacustomer','customer','namacustomer','kodecustomer');
    }
  }

    function get_barang(){
    //$this->load->model('birds_model');
    //get_supplier($q,$field,$table,$label,$value){
    if (isset($_GET['term'])){
      $q = strtolower($_GET['term']);
      $this->appmodel->get_autocomplete($q,'namabarang','barang','namabarang','kodebarang');
    }
  }
}