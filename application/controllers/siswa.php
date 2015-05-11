<?php 
	if (! defined('BASEPATH')) exit('No direct script access allowed');
		class Siswa extends CI_Controller 
		{
			function __construct()
			{
				parent::__construct();
				$this->load->library(array('table'));
				$this->load->helper(array('url','form'));
				$this->load->model('siswa_model','',TRUE);
			}
			
			function index()
			{
				$this->load->view('head');
				$this->load->view('menu_siswa');
				$this->load->view('foot');
			}
			
			function cetak_semua()
			{
				$siswas=$this->siswa_model->get_paged_list()->result();
				$tmpl = array ('table_open' => '<table border="1">');
				$this->table->set_template($tmpl);
				$this->table->set_empty("&nbsp;");
				$this->table->set_heading('No KK', 'Nama Kepala Keluarga', 'Pekerjaan', 'Status Perkawinan', 'Status Dalam Keluarga', 'Provinsi', 'Bantuan Langsung Tunai', 'Bantuan Indonesia Sejahtera', 'Detail', 'edit', 'Delete');
				$i=0;
					foreach ($siswas as $siswa)
					{
						$this->table->add_row
						(
							++$i,
							$siswa->nama,
							$siswa->jenis_pekerjaan,
							$siswa->status_perkawinan,
							$siswa->status_hub_keluarga,
							$siswa->provinsi,
							$siswa->BBM,
							$siswa->BIS,
							anchor('/siswa/cetak_detail/'.$siswa->id,'detail'),
							anchor('/siswa/edit/'.$siswa->id,'edit'),
							anchor('/siswa/delete/'.$siswa->id,'delete')
						);
					};
					$data['table']=$this->table->generate();
					$this->load->view('head');
					$this->load->view('siswa_list',$data);
					$this->load->view('foot');
			}
 
			function input()
			{
				$data['nama']=$this->input->post('nama',true);
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin',true);
				$data['tempat_lahir']=$this->input->post('tempat_lahir',true);
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir',true);
				$data['agama']=$this->input->post('agama',true);
				$data['pendidikan_terakhir']=$this->input->post('pendidikan_terakhir',true);
				$data['jenis_pekerjaan']=$this->input->post('jenis_pekerjaan',true);
				$data['status_perkawinan']=$this->input->post('status_perkawinan',true);
				$data['status_hub_keluarga']=$this->input->post('status_hub_keluarga',true);
				$data['kewarganegaraan']=$this->input->post('kewarganegaraan',true);
				$data['alamat']=$this->input->post('alamat',true);
				$data['kode_pos']=$this->input->post('kode_pos',true);
				$data['provinsi']=$this->input->post('provinsi',true);
				$data['BBM']=$this->input->post('BBM',true);
				$data['BIS']=$this->input->post('BIS',true);
				$data['tombol']=$this->input->post('tombol',true);
				#$this->load->view('input_siswa',$data);
			 
				if(!$data['tombol']){}
				else
				{
					$siswa= array
					(
						'nama'=>$data['nama'],
						'jenis_kelamin'=>$data['jenis_kelamin'],
						'tempat_lahir'=>$data['tempat_lahir'],
						'tanggal_lahir'=>$data['tanggal_lahir'],
						'agama'=>$data['agama'],
						'pendidikan_terakhir'=>$data['pendidikan_terakhir'],
						'jenis_pekerjaan'=>$data['jenis_pekerjaan'],
						'status_perkawinan'=>$data['status_perkawinan'],
						'status_hub_keluarga'=>$data['status_hub_keluarga'],
						'kewarganegaraan'=>$data['kewarganegaraan'],
						
						'alamat'=>$data['alamat'],
						
						'kode_pos'=>$data['kode_pos'],
						'provinsi'=>$data['provinsi'],
						'BBM'=>$data['BBM'],
						'BIS'=>$data['BIS'],
					);
					$this->siswa_model->save($siswa);
				}
				$this->load->view('head');
				$this->load->view('input_siswa',$data);
				$this->load->view('foot');
				
			}
			function cetak_detail($id)
				{
					$data['data']=$this->siswa_model->get_by_id($id)->row();
					$this->load->view('head');
					$this->load->view('siswa_detail',$data);
					$this->load->view('foot');
				}
			function edit($id)
				{
				#data['id']=$id
				$data['nama']=$this->input->post('nama',true);
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin',true);
				$data['tempat_lahir']=$this->input->post('tempat_lahir',true);
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir',true);
				$data['agama']=$this->input->post('agama',true);
				$data['pendidikan_terakhir']=$this->input->post('pendidikan_terakhir',true);
				$data['jenis_pekerjaan']=$this->input->post('jenis_pekerjaan',true);
				$data['status_perkawinan']=$this->input->post('status_perkawinan',true);
				$data['status_hub_keluarga']=$this->input->post('status_hub_keluarga',true);
				$data['kewarganegaraan']=$this->input->post('kewarganegaraan',true);
				$data['alamat']=$this->input->post('alamat',true);
				$data['kode_pos']=$this->input->post('kode_pos',true);
				$data['provinsi']=$this->input->post('provinsi',true);
				$data['BBM']=$this->input->post('BBM',true);
				$data['BIS']=$this->input->post('BIS',true);
				$data['tombol']=$this->input->post('tombol',true);
				#$this->load->view('input_siswa',$data);
			 
				if(!$data['tombol']){$data['data']=$this->siswa_model->get_by_id($id)->row();
					$this->load->view('head');
					$this->load->view('edit',$data);
					$this->load->view('foot');
				}
				else
				{
					$up= array
					(
						'nama'=>$data['nama'],
						'jenis_kelamin'=>$data['jenis_kelamin'],
						'tempat_lahir'=>$data['tempat_lahir'],
						'tanggal_lahir'=>$data['tanggal_lahir'],
						'agama'=>$data['agama'],
						'pendidikan_terakhir'=>$data['pendidikan_terakhir'],
						'jenis_pekerjaan'=>$data['jenis_pekerjaan'],
						'status_perkawinan'=>$data['status_perkawinan'],
						'status_hub_keluarga'=>$data['status_hub_keluarga'],
						'kewarganegaraan'=>$data['kewarganegaraan'],
						
						'alamat'=>$data['alamat'],
						
						'kode_pos'=>$data['kode_pos'],
						'provinsi'=>$data['provinsi'],
						'BBM'=>$data['BBM'],
						'BIS'=>$data['BIS'],
					);
					$this->siswa_model->update($id,$up);
					$this->load->view('head');
					$this->load->view('siswa_list',$data);
					$this->load->view('foot');
				}
					
					
					
					
				}
			function delete($id)
				{
					$this->siswa_model->delete($id);
					$this->load->view('head');
					$this->load->view('delete');
					$this->load->view('foot');
				}
			function about()
				{
					$this->load->view('head');
					$this->load->view('about');
					$this->load->view('foot');
				}
		}