<?php

class Customer extends CI_CONTROLLER{

	function __construct(){
		parent::__construct();
	}
	function index(){
		//list customer
		$data = array(
				'customer'	=> $this->appmodel->gettable('customer'),
				'judul'		=> 'Daftar Customer'
			);
		$this->load->view('header/header');
		$this->load->view('customer/list',$data);
		$this->load->view('footer/footer');
	}

	function detil($id = null){
		$this->db->where(array('kodecustomer'=>$id));
		if ($id === null){

			echo "Error";	
		}elseif ($this->db->get('customer')->num_rows() === 0) {
			# code...
			echo "Data tidak ditemukan";
		}
		else{
			$this->db->where(array('kodecustomer'=>$id));
			$data['dtl'] = $this->db->get('customer')->row();
			$this->load->view('header/header');
			$this->load->view('customer/detil',$data);		
			$this->load->view('footer/footer');
		}
	}

	//function tambah

	function tambah($d = null){


		if($d === null){
			//echo "Form tambah";
				$this->load->view('header/header');
				$this->load->view('customer/tambah');
				$this->load->view('footer/footer');
		}elseif($d === 'proses'){
			//aksi tambah
			//echo "aksi tambah k database";

			$data = array(
					'kodecustomer' 	=> $this->input->post('kodecustomer'),
					'namacustomer'	=> $this->input->post('namacustomer'),
					'alamat'		=> $this->input->post('alamat'),
					'email'			=> $this->input->post('email'),
					'notelp'		=> $this->input->post('notelp')
				);

			//check kode supplier
				//echo $this->appmodel->hitung('supplier',array('kodesupplier'=> $this->input->post('kodesupplier')));
			$d = $this->appmodel->hitung('customer',array('kodecustomer'=> $this->input->post('kodecustomer')));
			if($d > 0){
				echo "Kode customer sudah ada";
			}else{

				$proses = $this->db->insert('customer',$data);
				//$proses = $this->db->insert_string('supplier', $data);
				if($proses){
					echo '<script language="javascript">';
				echo 'alert("Data Berhasil Ditambah")';
				echo '</script>';
				redirect('customer','refresh');

				}else{
				echo '<script language="javascript">';
				echo 'alert("Data gagal ditambah")';
				echo '</script>';
				redirect('customer','refresh');
				}

			}
		}


	}

	function edit($id = null){
			if(empty($id)){
				echo '<script language="javascript">';
				echo 'alert("Error Bos")';
				echo '</script>';
				redirect('customer','refresh');
			}elseif($this->db->get_where('customer',array('kodecustomer'=>$id))->num_rows() > 0){
				$data = array(
									'dtl' 		=> $this->db->get_where('customer',array('kodecustomer'=>$id))->row(),
									'judul' 	=> 'Detil Data Customer'
							);
				$this->load->view('header/header');
				$this->load->view('customer/edit',$data);
				$this->load->view('footer/footer');
			}
	}

	function aksiedit(){
		$data = array(
					'kodecustomer' 	=> $this->input->post('kodecustomer'),
					'namacustomer'	=> $this->input->post('namacustomer'),
					'alamat'		=> $this->input->post('alamat'),
					'email'			=> $this->input->post('email'),
					'notelp'		=> $this->input->post('notelp')
				);
		$this->db->where('kodecustomer',$data['kodecustomer']);
		$a = $this->db->update('customer',$data);

		if($a){
				echo '<script language="javascript">';
				echo 'alert("Data Berhasil Diubah")';
				echo '</script>';
				redirect('customer','refresh');
		}

	}

	function hapus($id = null){
		if(!empty($id)){
			$this->db->where('kodecustomer',$id);
			$a = $this->db->delete('customer');
			if($a){
				echo '<script language="javascript">';
				echo 'alert("Data Berhasil Dihapus")';
				echo '</script>';
				redirect('customer','refresh');
			}
		}
	}
}