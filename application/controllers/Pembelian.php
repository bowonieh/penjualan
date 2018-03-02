<?php

class Pembelian extends CI_CONTROLLER{
	function __construct(){
		parent::__construct();
	}

	function tambah(){
		//riwayat pembelian	

		$this->load->view('header/header');
		$this->load->view('pembelian/tambah_beli');
		$this->load->view('footer/footer');
	}

	function index(){
		$this->db->join('vw_stok','vw_beli.kdbrg = vw_stok.kdbrg','inner');
		$data['beli'] = $this->appmodel->gettable('vw_beli');
		$this->load->view('header/header');
		$this->load->view('pembelian/list',$data);
		$this->load->view('footer/footer');	
	}

	function hapus(){
		$key = $this->input->post('id');

			$a = $this->db->delete('pembelian',array('no_invoice'=>$key));
			if($a){
				echo json_encode('success');
			}
	}
	function aksipembelian(){
		$data1 = array(
				'notransaksi' 	=> $this->input->post('notransaksi'),
				'kodesupplier'	=> $this->input->post('kodesupplier'),
				'no_invoice'		=> generateInvoice(),
				'tanggal'		=> date('Y-m-d')
			);

		$a = $this->db->insert('pembelian',$data1);

		if($a){
		//	echo "Data masuk";
			$data2 = array(
					'notransaksi' 	=> $data1['notransaksi'],
					'kodebarang'	=> $this->input->post('kodebarang'),
					'harga'			=> $this->input->post('harga'),
					'qty'			=> $this->input->post('qty'),
					'subtotal'			=> $this->input->post('total')
			);
			$b = $this->db->insert('pembelian_detail',$data2);
			if($b){
				echo json_encode('success') ;
			}
		}

		
	}

	//function aksibeli(){
		//$data = json_decode($this->input->post('json'),true);

		//$awal = array_shift($data);

	///	echo $awal['kode Transaksi'];

		//masukkan ke table pembelian

	//	$beli = array(
				//'notransaksi'	=> $awal['kode Transaksi'],
				//'kodesupplier'	=> $awal['kode Supplier'],


			//);
		//print_r($data);

		//array_push($data,$awal);

		//print_r($data);
		

		

		
	//}


}