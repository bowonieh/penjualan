<?php

class Penjualan extends CI_CONTROLLER{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data = array(
				'beli'	=> $this->appmodel->gettable('vw_jual'),
				'judul'		=> 'Penujualan Barang'
			);
		$this->load->view('header/header');
		$this->load->view('penjualan/list',$data);
		$this->load->view('footer/footer');	
	}

	function tambah(){
		//riwayat pembelian	

		$this->load->view('header/header');
		$this->load->view('penjualan/tambah_jual');
		$this->load->view('footer/footer');
	}

	function detil($id = null){
		$this->db->where(array('notransaksi'=>$id));
		if ($id === null){

			echo "Error";	
		}elseif ($this->db->get('penjualan')->num_rows() === 0) {
			# code...
			echo "Data tidak ditemukan";
		}
		else{
			$this->db->where(array('penjualan.notransaksi'=>$id));
			//$this->db->join('penjualan_detail','penjualan_detail.notransaksi = penjualan.notransaksi','left');
			$this->db->join('customer','customer.kodecustomer = penjualan.kodecustomer','inner');
			$data['dtl'] = $this->db->get('penjualan')->row();

			$this->db->where(array('notransaksi'=>$id));
			$this->db->join('barang','barang.kodebarang = penjualan_detail.kodebarang','inner');
			$data['jualDtl'] = $this->db->get('penjualan_detail')->result();
			
			$this->load->view('header/header');
			$this->load->view('penjualan/detil',$data);		
			$this->load->view('footer/footer');
		}
	}

	function aksijual(){
		$data = json_decode($this->input->post('json'),true);
		//pisahkan data awal
		$satu = array_shift($data);

		//print_r($satu);
		$last_id = $this->db->get('penjualan')->num_rows();

		$jual = array(
				'notransaksi'	=>	$satu['Kode Transaksi'],
				'kodecustomer'	=> $satu['Kode Customer'],
				'no_po'			=>	$last_id+1,
				'tanggal'		=> date('Y-m-d')
			);

		//print_r($jual);

		//masukkan ke database

		$z = $this->db->insert('penjualan',$jual);

		if($z){
			array_push($data, $satu);

			foreach($data as $d){
				$i = array(
						'notransaksi' 	=> $d['Kode Transaksi'],
						'kodebarang'  	=> $d['Kode Barang'],
						'qty'			=> $d['QTY'],
						'harga'			=> $d['Jumlah'],
						'subtotal'		=> $d['total']
					);

				//print_r($i);
				$in = $this->db->insert('penjualan_detail',$i);

			}

		}

		echo json_encode('success');

	}
}