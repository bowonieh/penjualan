<?php 

class Supplier extends CI_CONTROLLER{
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		//list supplier
		$data['supplier'] = $this->appmodel->gettable('supplier');
		$this->load->view('header/header');
		$this->load->view('supplier/list',$data);
		$this->load->view('footer/footer');
	}

	function detil($id = null){
		$this->db->where(array('kodesupplier'=>$id));
		if ($id === null){

			echo "Error";	
		}elseif ($this->db->get('supplier')->num_rows() === 0) {
			# code...
			echo "Data tidak ditemukan";
		}
		else{
			$this->db->where(array('kodesupplier'=>$id));
			$data['dtl'] = $this->db->get('supplier')->row();
			$this->load->view('header/header');
			$this->load->view('supplier/detil',$data);		
			$this->load->view('footer/footer');
		}
	}

	function input($id =null){
		if($id==null){
			
		}else{
			
		}
	}
	function tambah($d = null){

		if($d === null){
			//echo "Form tambah";
			$this->load->view('header/header');
			$this->load->view('supplier/tambah');
			$this->load->view('footer/footer');
		}elseif($d === 'proses'){
			//aksi tambah
			//echo "aksi tambah k database";

			$data = array(
					'kodesupplier' 	=> $this->input->post('kodesupplier'),
					'namasupplier'	=> $this->input->post('namasupplier'),
					'alamat'		=> $this->input->post('alamat'),
					'email'			=> $this->input->post('email'),
					'notelp'		=> $this->input->post('notelp')
				);

			//check kode supplier
				//echo $this->appmodel->hitung('supplier',array('kodesupplier'=> $this->input->post('kodesupplier')));
			$d = $this->appmodel->hitung('supplier',array('kodesupplier'=> $this->input->post('kodesupplier')));
			if($d > 0){
				echo "Kode Supplier sudah ada";
			}else{

				$proses = $this->db->insert('supplier',$data);
				//$proses = $this->db->insert_string('supplier', $data);
				if($proses){
					echo '<script language="javascript">';
				echo 'alert("Data Berhasil Ditambah")';
				echo '</script>';
				redirect('supplier','refresh');

				}else{
				echo '<script language="javascript">';
				echo 'alert("Data Gagal Ditambah")';
				echo '</script>';
				redirect('supplier','refresh');
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
			}elseif($this->db->get_where('supplier',array('kodesupplier'=>$id))->num_rows() > 0){
				$data = array(
									'dtl' 		=> $this->db->get_where('supplier',array('kodesupplier'=>$id))->row(),
									'judul' 	=> 'Detil Data Supplier'
							);
				$this->load->view('header/header');
				$this->load->view('supplier/edit',$data);
				$this->load->view('footer/footer');
			}
	}

	function aksiedit(){
		$data = array(
					'kodesupplier' 	=> $this->input->post('kodesupplier'),
					'namasupplier'	=> $this->input->post('namasupplier'),
					'alamat'		=> $this->input->post('alamat'),
					'email'			=> $this->input->post('email'),
					'notelp'		=> $this->input->post('notelp')
				);
		$this->db->where('kodesupplier',$data['kodesupplier']);
		$a = $this->db->update('supplier',$data);

		if($a){
				echo '<script language="javascript">';
				echo 'alert("Data Berhasil Diubah")';
				echo '</script>';
				redirect('supplier','refresh');
		}

	}

}