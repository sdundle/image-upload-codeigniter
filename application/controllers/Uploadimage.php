<?php

class Uploadimage extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('index', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                $config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;
				
				$this->upload->initialize($config);
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('index', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						
						$this->thumb($data,$this->input->post('width'),$this->input->post('height'),true); 

                        $this->load->view('success', $data);
                }
				 
        }
		
		function thumb($data,$thumb_w,$thumb_h,$create_thumb)    
				{       
					foreach($data as $row) {
						$path = $row['file_path'].$row['file_name'];
					}
					$config['image_library'] = 'gd2';    
					$config['source_image'] = $path;      
					$config['create_thumb'] = $create_thumb;    
					$config['maintain_ratio'] = TRUE;    
					$config['width'] = $thumb_w;     
					$config['height'] = $thumb_h;     
					$this->load->library('image_lib', $config); 
					$this->image_lib->clear();
					$this->image_lib->initialize($config);						
					$this->image_lib->resize();    
				} 
}
?>