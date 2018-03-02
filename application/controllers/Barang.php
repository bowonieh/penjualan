<?php

class Barang extends CI_CONTROLLER{
	function __construct(){
		parent::__construct();
	}

	function index(){
		//list customer
		$data = array(
				'barang'	=> $this->appmodel->gettable('vw_stok'),
				'judul'		=> 'Daftar Customer'
			);
		$this->load->view('header/header');
		$this->load->view('barang/list',$data);
		$this->load->view('footer/footer');
		}

		function hapus(){
			$key = $this->input->post('id');

			$a = $this->db->delete('barang',array('kodebarang'=>$key));
			if($a){
				echo json_encode('success');
			}

		}

		

		function edit($id = null){
			if(!isset($id)){
				echo '<script language="javascript">';
				echo 'alert("Error Bos")';
				echo '</script>';
				redirect('barang','refresh');
			}else{
				$data = array(
									'dtl' 		=> $this->db->get_where('barang',array('kodebarang'=>$id))->row(),
									'judul' 	=> 'Detil Data Customer'
							);
				$this->load->view('header/header');
				$this->load->view('barang/edit',$data);
				$this->load->view('footer/footer');
			}
		}
		
		function detil($id = null){
			$this->db->where(array('kodebarang'=>$id));
			if ($id === null){	

						echo "Error";	
			}elseif ($this->db->get('barang')->num_rows() === 0) {
			# code...
						echo "Data tidak ditemukan";
				}
				else{
						$this->db->where(array('kodebarang'=>$id));
						$data['dtl'] = $this->db->get('barang')->row();
						$this->load->view('header/header');
						$this->load->view('barang/detil',$data);		
						$this->load->view('footer/footer');
					}
		}

		function aksiedit(){
			
			$kodebarang 	= $this->input->post('kodebarang');
			$data = array( 
						'namabarang'	=> $this->input->post('namabarang'),
						'hargabarang' 	=> $this->input->post('hargabarang')

					); 
			$this->db->where('kodebarang',$kodebarang);
			$a = $this->db->update('barang',$data);
			if($a){
				echo json_encode('success');
			}
		}

		function tambah($d = null){


		if($d === null){
			//echo "Form tambah";
				$this->load->view('header/header');
				$this->load->view('barang/tambah');
				$this->load->view('footer/footer');
		}elseif($d === 'proses'){
			//aksi tambah
			//echo "aksi tambah k database";

			$data = array(
					'kodebarang' 	=> $this->input->post('kodebarang'),
					'namabarang'	=> $this->input->post('namabarang'),
					'hargabarang'		=> $this->input->post('hargabarang'),
					'entrytime'			=> date('Y-m-d')
				);

			//check kode supplier
				//echo $this->appmodel->hitung('supplier',array('kodesupplier'=> $this->input->post('kodesupplier')));
			$d = $this->appmodel->hitung('barang',array('kodebarang'=> $this->input->post('kodebarang')));
			if($d > 0){
				echo "Kode Barang sudah ada";
			}else{

				$proses = $this->db->insert('barang',$data);
				//$proses = $this->db->insert_string('supplier', $data);
				if($proses){
					echo '<script language="javascript">';
				echo 'alert("Data Berhasil Ditambah")';
				echo '</script>';
				redirect('barang','refresh');

				}else{
				echo '<script language="javascript">';
				echo 'alert("Data gagal ditambah")';
				echo '</script>';
				redirect('barang','refresh');
				}

			}
		}


	}

	}