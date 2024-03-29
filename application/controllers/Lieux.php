<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lieux extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lieux_model');
    } 

    /*
     * Listing of lieux
     */
    function index()
    {
        $data['lieux'] = $this->Lieux_model->get_all_lieux();
        
        $data['_view'] = 'lieux/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new lieux
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom_lieu','Nom Lieu','required');
		$this->form_validation->set_rules('adresse_lieu','Adresse Lieu','required');
		$this->form_validation->set_rules('nbreplace_lieu','Nbreplace Lieu','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'state' => $this->input->post('state'),
				'nom_lieu' => $this->input->post('nom_lieu'),
				'adresse_lieu' => $this->input->post('adresse_lieu'),
				'nbreplace_lieu' => $this->input->post('nbreplace_lieu'),
				'createAt' => $this->input->post('createAt'),
            );
            
            $lieux_id = $this->Lieux_model->add_lieux($params);
            redirect('lieux/index');
        }
        else
        {            
            $data['_view'] = 'lieux/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a lieux
     */
    function edit($id_lieu)
    {   
        // check if the lieux exists before trying to edit it
        $data['lieux'] = $this->Lieux_model->get_lieux($id_lieu);
        
        if(isset($data['lieux']['id_lieu']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom_lieu','Nom Lieu','required');
			$this->form_validation->set_rules('adresse_lieu','Adresse Lieu','required');
			$this->form_validation->set_rules('nbreplace_lieu','Nbreplace Lieu','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'state' => $this->input->post('state'),
					'nom_lieu' => $this->input->post('nom_lieu'),
					'adresse_lieu' => $this->input->post('adresse_lieu'),
					'nbreplace_lieu' => $this->input->post('nbreplace_lieu'),
					'createAt' => $this->input->post('createAt'),
                );

                $this->Lieux_model->update_lieux($id_lieu,$params);            
                redirect('lieux/index');
            }
            else
            {
                $data['_view'] = 'lieux/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The lieux you are trying to edit does not exist.');
    } 

    /*
     * Deleting lieux
     */
    function remove($id_lieu)
    {
        $lieux = $this->Lieux_model->get_lieux($id_lieu);

        // check if the lieux exists before trying to delete it
        if(isset($lieux['id_lieu']))
        {
            $this->Lieux_model->delete_lieux($id_lieu);
            redirect('lieux/index');
        }
        else
            show_error('The lieux you are trying to delete does not exist.');
    }
    
}
