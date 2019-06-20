<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Paiement extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Paiement_model');
    } 

    /*
     * Listing of paiements
     */
    function index()
    {
        $data['paiements'] = $this->Paiement_model->get_all_paiements();
        
        $data['_view'] = 'paiement/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new paiement
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'state' => $this->input->post('state'),
				'id_reservation' => $this->input->post('id_reservation'),
				'createAt' => $this->input->post('createAt'),
            );
            
            $paiement_id = $this->Paiement_model->add_paiement($params);
            redirect('paiement/index');
        }
        else
        {
			$this->load->model('Reservation_model');
			$data['all_reservations'] = $this->Reservation_model->get_all_reservations();
            
            $data['_view'] = 'paiement/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a paiement
     */
    function edit($id_paiement)
    {   
        // check if the paiement exists before trying to edit it
        $data['paiement'] = $this->Paiement_model->get_paiement($id_paiement);
        
        if(isset($data['paiement']['id_paiement']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'state' => $this->input->post('state'),
					'id_reservation' => $this->input->post('id_reservation'),
					'createAt' => $this->input->post('createAt'),
                );

                $this->Paiement_model->update_paiement($id_paiement,$params);            
                redirect('paiement/index');
            }
            else
            {
				$this->load->model('Reservation_model');
				$data['all_reservations'] = $this->Reservation_model->get_all_reservations();

                $data['_view'] = 'paiement/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The paiement you are trying to edit does not exist.');
    } 

    /*
     * Deleting paiement
     */
    function remove($id_paiement)
    {
        $paiement = $this->Paiement_model->get_paiement($id_paiement);

        // check if the paiement exists before trying to delete it
        if(isset($paiement['id_paiement']))
        {
            $this->Paiement_model->delete_paiement($id_paiement);
            redirect('paiement/index');
        }
        else
            show_error('The paiement you are trying to delete does not exist.');
    }
    
}
