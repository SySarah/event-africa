<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Reservation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Reservation_model');
    } 

    /*
     * Listing of reservations
     */
    function index()
    {
        $data['reservations'] = $this->Reservation_model->get_all_reservations();
        
        $data['_view'] = 'reservation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new reservation
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'state' => $this->input->post('state'),
				'id_participant' => $this->input->post('id_participant'),
				'createAt' => $this->input->post('createAt'),
            );
            
            $reservation_id = $this->Reservation_model->add_reservation($params);
            redirect('reservation/index');
        }
        else
        {
			$this->load->model('Participant_model');
			$data['all_participants'] = $this->Participant_model->get_all_participants();
            
            $data['_view'] = 'reservation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a reservation
     */
    function edit($id_reservation)
    {   
        // check if the reservation exists before trying to edit it
        $data['reservation'] = $this->Reservation_model->get_reservation($id_reservation);
        
        if(isset($data['reservation']['id_reservation']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'state' => $this->input->post('state'),
					'id_participant' => $this->input->post('id_participant'),
					'createAt' => $this->input->post('createAt'),
                );

                $this->Reservation_model->update_reservation($id_reservation,$params);            
                redirect('reservation/index');
            }
            else
            {
				$this->load->model('Participant_model');
				$data['all_participants'] = $this->Participant_model->get_all_participants();

                $data['_view'] = 'reservation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The reservation you are trying to edit does not exist.');
    } 

    /*
     * Deleting reservation
     */
    function remove($id_reservation)
    {
        $reservation = $this->Reservation_model->get_reservation($id_reservation);

        // check if the reservation exists before trying to delete it
        if(isset($reservation['id_reservation']))
        {
            $this->Reservation_model->delete_reservation($id_reservation);
            redirect('reservation/index');
        }
        else
            show_error('The reservation you are trying to delete does not exist.');
    }
    
}
